<?php
// Recebe o formulário de contato do site e envia via SMTP com PHPMailer.
// Responde sempre em JSON: {"ok": true} ou {"ok": false, "erro": "..."}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/lib/PHPMailer/Exception.php';
require __DIR__ . '/lib/PHPMailer/PHPMailer.php';
require __DIR__ . '/lib/PHPMailer/SMTP.php';

ini_set('display_errors', '0');
header('Content-Type: application/json; charset=utf-8');

function responder(int $status, bool $ok, string $erro = ''): void
{
    http_response_code($status);
    echo json_encode($ok ? ['ok' => true] : ['ok' => false, 'erro' => $erro]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(405, false, 'Método não permitido.');
}

// Campo isca: humanos não veem, robôs preenchem.
if (!empty($_POST['site'])) {
    responder(200, true);
}

$nome     = trim($_POST['nome'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');
$email    = trim($_POST['email'] ?? '');
$mensagem = trim($_POST['mensagem'] ?? '');

// Mesmas regras do js/scripts.js
if ($nome === '' || $telefone === '' || $email === '' || $mensagem === '') {
    responder(422, false, 'Preencha todos os campos.');
}
if (mb_strlen($nome) < 3 || !preg_match("/^[\p{L}' .-]+$/u", $nome)) {
    responder(422, false, 'Nome inválido.');
}
$digitos = preg_replace('/\D/', '', $telefone);
if (!preg_match('/^[1-9]{2}(9\d{8}|\d{8})$/', $digitos)) {
    responder(422, false, 'Telefone inválido. Use DDD + número.');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    responder(422, false, 'E-mail inválido.');
}
if (mb_strlen($mensagem) < 10) {
    responder(422, false, 'A mensagem precisa ter pelo menos 10 caracteres.');
}
if (mb_strlen($nome) > 100 || mb_strlen($email) > 150 || mb_strlen($mensagem) > 5000) {
    responder(422, false, 'Algum campo passou do tamanho permitido.');
}
// Telefone sempre no mesmo formato no e-mail recebido
$telefone = strlen($digitos) === 11
    ? sprintf('(%s) %s-%s', substr($digitos, 0, 2), substr($digitos, 2, 5), substr($digitos, 7))
    : sprintf('(%s) %s-%s', substr($digitos, 0, 2), substr($digitos, 2, 4), substr($digitos, 6));
// Evita quebra de linha em campos que vão para cabeçalhos
$nome = preg_replace('/[\r\n]+/', ' ', $nome);

$config = require __DIR__ . '/config/email.config.php';

$msg = new PHPMailer(true);

try {
    $msg->CharSet = PHPMailer::CHARSET_UTF8;
    $msg->isSMTP();
    $msg->Host       = $config['host'];
    $msg->Port       = $config['port'];
    $msg->SMTPAuth   = true;
    $msg->SMTPSecure = $config['secure'] === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $msg->Username   = $config['username'];
    $msg->Password   = $config['password'];

    $msg->setFrom($config['from'], $config['from_name']);
    $msg->addAddress($config['to'], $config['to_name']);
    $msg->addReplyTo($email, $nome);

    $msg->isHTML(false);
    $msg->Subject = 'Contato via site: ' . $nome;
    $msg->Body    = "Nome: {$nome}\n"
                  . "Telefone: {$telefone}\n"
                  . "E-mail: {$email}\n\n"
                  . "Mensagem:\n{$mensagem}\n";

    $msg->send();
    responder(200, true);
} catch (Exception $e) {
    error_log('Formulário de contato: ' . $msg->ErrorInfo);
    responder(500, false, 'Não foi possível enviar agora. Tente pelo e-mail ou telefone ao lado.');
}

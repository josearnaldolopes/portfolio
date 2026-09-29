<?php
// Copie para email.config.php e preencha a senha.
// Configuração SMTP do formulário de contato.
// Este arquivo NÃO deve ir para repositório git (a pasta tem .htaccess negando acesso web).
// O certificado TLS do servidor é emitido para *.dialhost.com.br, por isso o host
// é o nome do servidor da hospedagem e não smtp.josearnaldo.net.
return [
    'host'      => 'br117.dialhost.com.br',
    'port'      => 587,
    'secure'    => 'tls',               // STARTTLS
    'username'  => 'jose@josearnaldo.net',
    'password'  => 'SENHA_DO_EMAIL',
    'from'      => 'jose@josearnaldo.net',
    'from_name' => 'Site josearnaldo.net',
    'to'        => 'josearnaldo.net@gmail.com',
    'to_name'   => 'José Arnaldo',
];

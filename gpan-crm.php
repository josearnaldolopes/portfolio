<?php
// Versão do CSS e do JS: data de modificação dos arquivos, só em números (cache-busting).
$versao = filemtime(__DIR__ . '/css/styles.css') . filemtime(__DIR__ . '/js/scripts.js');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Estudo de caso: GPAN CRM, plataforma multi-tenant de gestão comercial e jurídica — correções de fluxo crítico, observabilidade e modernização visual em mais de 50 telas." />
        <meta name="author" content="José Arnaldo" />
        <title>GPAN CRM | Estudo de caso — José Arnaldo</title>
        <link rel="canonical" href="https://www.josearnaldo.net/gpan-crm.php" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <meta property="og:type" content="article" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:url" content="https://www.josearnaldo.net/gpan-crm.php" />
        <meta property="og:title" content="GPAN CRM | Estudo de caso" />
        <meta property="og:description" content="Plataforma multi-tenant de gestão comercial e jurídica usada por quatro marcas do grupo." />
        <meta property="og:image" content="https://www.josearnaldo.net/imagens/sites/GPAN/crm-login.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
        <script src="https://kit.fontawesome.com/c3247fde6d.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="css/styles.css?v=<?php echo $versao; ?>" rel="stylesheet" />
    </head>
    <body id="top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container px-4">
                <a class="navbar-brand" href="index.php">&#60;josearnaldo.net/&#62;</a>
                <a href="index.php#trabalhos" class="btn btn-outline-light btn-sm">&larr; Voltar ao portfólio</a>
            </div>
        </nav>

        <header class="bg-primary text-white pb-5">
            <div class="container px-4 text-center" style="padding-top: 90px;">
                <div class="small text-uppercase fw-bold mb-2">Estudo de caso — Novembro de 2026</div>
                <h1 class="fw-bolder">GPAN CRM</h1>
                <p class="lead">Plataforma multi-tenant de gestão comercial e jurídica usada por quatro marcas do grupo — da captação do lead ao fechamento, passando pela conferência de pagamentos e o módulo jurídico satélite.</p>
                <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                    <span class="badge bg-dark rounded-pill badge-tech">PHP 8</span>
                    <span class="badge bg-dark rounded-pill badge-tech">MySQL</span>
                    <span class="badge bg-dark rounded-pill badge-tech">JavaScript</span>
                    <span class="badge bg-dark rounded-pill badge-tech">Docker + Nginx</span>
                    <span class="badge bg-dark rounded-pill badge-tech">Service Workers</span>
                    <span class="badge bg-dark rounded-pill badge-tech">Multi-tenant</span>
                </div>
            </div>
        </header>

        <section class="bg-light">
            <div class="container-fluid px-4 py-5">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="mb-3">Contexto</h2>
                        <p class="lead">O GPAN CRM roda em VPS própria, atendendo quatro marcas do grupo (<b>BRC Soluções</b>, <b>Vantage Consultoria</b>, <b>O Bom Acordo</b> e <b>Regularize CNH</b>) a partir de uma única base de código multi-tenant. O fluxo cobre captação de leads vindos de sites externos, funil comercial, conferência e envio de comprovantes de pagamento, e um módulo jurídico satélite que recebe esses casos pra abertura de processo. O trabalho a seguir cobre correções de fluxo crítico, infraestrutura de observabilidade e uma modernização visual completa da aplicação — mais de 50 telas, sem interromper o uso em produção em nenhum momento.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid px-4 py-5">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">

                        <h2 class="mb-3">Fluxo crítico de aprovação</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h3 class="h5 card-title">Falha num fluxo crítico de aprovação</h3>
                                <p><span class="badge bg-warning text-dark mb-1">Problema</span><br>Uma das áreas internas reportou que registros estavam avançando no funil sem passar por uma etapa de validação obrigatória — quebrando uma regra de negócio explícita do processo.</p>
                                <p class="mb-0"><span class="badge bg-success mb-1">Solução</span><br>Adicionei a trava de estado que faltava, exigindo a confirmação da etapa antes de qualquer avanço — e, numa segunda etapa, passei a <b>registrar e exibir quem realizou cada ação</b>, dando rastreabilidade total a um processo que antes dependia de confiança verbal.</p>
                            </div>
                        </div>

                        <h2 class="mb-3">Observabilidade e resiliência</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h3 class="h5 card-title">Saber o que caiu, quando e pra quem</h3>
                                <p><span class="badge bg-warning text-dark mb-1">Problema</span><br>Instabilidades no servidor eram percebidas de forma informal — alguém reclamava no grupo, sem dado nenhum sobre horário, duração ou real impacto.</p>
                                <p class="mb-0"><span class="badge bg-success mb-1">Solução</span><br>Construí um painel de monitoramento com métricas de CPU, memória e disco por container Docker, rastreamento de queries lentas até a conexão de origem, e uma <b>tela personalizada de "sistema fora do ar"</b> via Service Worker — substitui o erro genérico do navegador, reconecta sozinha e devolve o usuário exatamente à tela que estava usando. Cada queda fica registrada com duração, usuário e email de quem sentiu o problema.</p>
                            </div>
                        </div>

                        <h2 class="mb-3">Modernização visual</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <h3 class="h5 card-title">Tema escuro em mais de 50 telas, sem quebrar nada</h3>
                                <p><span class="badge bg-info text-dark mb-1">Escopo</span><br>Rollout de tema escuro cobrindo todas as telas autenticadas da aplicação, centralizado num único arquivo compartilhado — evitando duplicar lógica em cada página e permitindo aplicar correções globais depois.</p>
                                <p><span class="badge bg-warning text-dark mb-1">Problema encontrado</span><br>A primeira versão vazava a <b>preferência de tema do sistema operacional de quem acessava</b> pra qualquer tela sem o controle correto — um bug sutil de especificidade CSS, identificado e corrigido antes de causar impacto maior.</p>
                                <p class="mb-0"><span class="badge bg-success mb-1">Resultado</span><br>Tema escuro consistente, com ajustes de contraste e acessibilidade, ícones de marca com cor própria (não apagados pela opacidade antiga) e <b>versionamento automático de assets por hash de conteúdo</b> — toda atualização chega sem exigir Ctrl+F5 de ninguém.</p>
                            </div>
                        </div>

                        <h2 class="mb-3">Stack técnica</h2>
                        <div class="row g-3 mb-5">
                            <div class="col-md-3 col-6">
                                <div class="card h-100"><div class="card-body">
                                    <div class="text-primary fw-bold small text-uppercase mb-1">Backend</div>
                                    <div class="small text-muted">PHP 8 · arquitetura multi-tenant · APIs REST internas</div>
                                </div></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card h-100"><div class="card-body">
                                    <div class="text-primary fw-bold small text-uppercase mb-1">Dados</div>
                                    <div class="small text-muted">MySQL · migrations idempotentes por tenant</div>
                                </div></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card h-100"><div class="card-body">
                                    <div class="text-primary fw-bold small text-uppercase mb-1">Frontend</div>
                                    <div class="small text-muted">JavaScript vanilla · Tailwind CSS · Service Workers / PWA</div>
                                </div></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card h-100"><div class="card-body">
                                    <div class="text-primary fw-bold small text-uppercase mb-1">Infraestrutura</div>
                                    <div class="small text-muted">Docker · Nginx · VPS própria · Git</div>
                                </div></div>
                            </div>
                        </div>

                        <h2 class="mb-3">Práticas de engenharia</h2>
                        <ul class="list-group list-group-flush mb-5">
                            <li class="list-group-item"><b>Deploy seguro</b> — backup automático antes de qualquer alteração em produção, com verificação byte a byte depois de cada publicação.</li>
                            <li class="list-group-item"><b>Migrations idempotentes</b> — rodam em todos os tenants ativos de uma vez, sem travar quem já tem a coluna.</li>
                            <li class="list-group-item"><b>Diagnóstico orientado a dados</b> — toda correção de bug partiu de evidência em produção (timestamps, EXPLAIN de query, logs), não de suposição.</li>
                            <li class="list-group-item"><b>Zero downtime visual</b> — 50+ telas atualizadas sem nenhuma quebra reportada em produção.</li>
                        </ul>

                        <p class="text-center"><a href="https://crm.gpansolucoes.com.br/" target="_blank" rel="noopener" class="btn btn-primary px-4 py-2"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o CRM</a></p>

                    </div>
                </div>
            </div>
        </section>

        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white"><i class="fa fa-heart" aria-hidden="true"></i> Feito com amor, carinho e dedicação direto do terceiro planeta a partir do Sol.</p></div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

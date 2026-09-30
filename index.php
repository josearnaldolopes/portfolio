<?php
// Versão do CSS e do JS: data de modificação dos arquivos, só em números.
// Muda sozinha quando styles.css ou scripts.js são atualizados;
// fora isso o navegador usa a cópia em cache (carrega mais rápido).
$versao = filemtime(__DIR__ . '/css/styles.css') . filemtime(__DIR__ . '/js/scripts.js');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="José Arnaldo, desenvolvedor web full-stack (PHP, Laravel, JavaScript, MySQL, Flutter). Sites, CRMs, áreas de cliente e aplicativos. Cerca de 80 sites desenvolvidos." />
        <meta name="author" content="José Arnaldo" />
        <title>José Arnaldo | Desenvolvedor Web Full-stack</title>
        <link rel="canonical" href="https://www.josearnaldo.net/" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Compartilhamento (WhatsApp, LinkedIn, Facebook) -->
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:url" content="https://www.josearnaldo.net/" />
        <meta property="og:title" content="José Arnaldo | Desenvolvedor Web Full-stack" />
        <meta property="og:description" content="Sites, CRMs, áreas de cliente e aplicativos. PHP, Laravel, JavaScript, MySQL e Flutter." />
        <meta property="og:image" content="https://www.josearnaldo.net/imagens/fundo.png?v=<?php echo filemtime(__DIR__ . '/imagens/fundo.png'); ?>" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1596" />
        <meta property="og:image:height" content="792" />
        <meta property="og:image:alt" content="josearnaldo.net" />
        <meta name="twitter:card" content="summary_large_image" />
        <!-- Fonts and icons -->
        <script src="https://kit.fontawesome.com/c3247fde6d.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css?v=<?php echo $versao; ?>" rel="stylesheet" />
    </head>
    <body id="top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#top">&#60;josearnaldo.net/&#62;</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#quem">/quem</a></li>
                        <li class="nav-item"><a class="nav-link" href="#trabalhos">/trabalhos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#qualificacoes">/qualificações</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contatos">/contatos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary text-white pb-5">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">&#60;josearnaldo.net/&#62;</h1>
                <p class="lead">Desenvolvedor com experiência em diversas áreas da tecnologia, com foco em criação de soluções para a web e dispositivos móveis.<br>Sólidos conhecimentos em <b>Front-end</b> utilizando <b>HTML</b>, <b>CSS</b>, <b>JavaScript</b> e frameworks como <b>Bootstrap</b> e <b>jQuery</b>.<br>No <b>Back-end</b> com <b>PHP</b>, além de ter familiaridade com outras linguagens como <b>Python</b>, <b>Node.js</b> e <b>Java</b>.
                </p>
            </div>
        </header>

        <!-- About section-->
        <section class="bg-light" id="quem">
            <div class="bg-primary text-white pt-0">
                <div class="container">
                    <div class="title-1">/quem</div>
                </div>
            </div>
            <div class="container-fluid px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">

                        <p class="lead">Possuo experiência no desenvolvimento completo de aplicações web, atuando em todas as etapas do processo, desde a concepção e criação do <b>front-end</b> até a implementação e manutenção do <b>back-end</b>. Ao longo da minha trajetória, tive a oportunidade de atender a uma ampla variedade de clientes, adaptando soluções às necessidades específicas de cada projeto, desde pequenas aplicações personalizadas até sistemas mais robustos e complexos.</p>

                        <p class="lead">Essa vivência me proporcionou não apenas habilidades técnicas, mas também a capacidade de compreender demandas diversificadas e oferecer resultados alinhados aos objetivos dos clientes.</p>

                        <p class="lead">Participei diretamente do desenvolvimento de aproximadamente 80 sites e contribuí, de forma indireta, em cerca de 30 outros projetos, atuando em atividades como desenvolvimento, manutenção e consultoria técnica.</p>
                       
                        <p class="lead">Atualmente, busco oportunidades na área de desenvolvimento, onde possa aplicar e aprimorar minhas habilidades técnicas e conhecimentos adquiridos ao longo da minha trajetória. Também estou aberto a explorar outras áreas em que minha experiência e competências contribuam de forma significativa para os objetivos da equipe e da empresa. Sou motivado a enfrentar novos desafios e agregar valor por meio do meu comprometimento, criatividade e visão estratégica.</p>

                        <p class="lead">Veja meus <a href="#trabalhos">trabalhos</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section id="trabalhos">
            <div class="bg-light text-white pt-4">
                <div class="container">
                    <div class="title-2 bg-dark">/trabalhos</div>
                </div>
            </div>
            <div class="container-fluid px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <p class="lead"><b>HTML</b> + <b>CSS</b> + <b>JavaScript</b> + <b>PHP</b> e <b>MySQL</b></p>
                        <p class="lead">Veja todos os trabalhos no <a href="https://www.josearnaldo.net/linkedin" target="_blank">Linkedin</a>.</p>

                        <div class="container mt-5">
                            <h2 class="mb-4">Últimos trabalhos</h2>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/beg-cliente.jpg" alt="Área de cliente B&G Soluções">
                                      <div class="card-body">
                                        <h5 class="card-title">CRM e área de cliente B&G</h5>
                                        <p>Sistema de acompanhamento de serviços</p>
                                        <a href="https://cliente.begsolucoes.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja área de cliente</a>
                                        <a href="https://crm.begsolucoes.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o CRM</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/reg-cliente.jpg" alt="Área de cliente Regularize CNH">
                                      <div class="card-body">
                                        <h5 class="card-title">CRM e área de cliente Regularize CNH</h5>
                                        <p>Sistema de acompanhamento de serviços</p>
                                        <a href="https://cliente.regularizecnh.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja área de cliente</a>
                                        <a href="https://crm.regularizecnh.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o CRM</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/van-cliente.jpg" alt="Área de cliente Vantage Consultoria">
                                      <div class="card-body">
                                        <h5 class="card-title">CRM e área de cliente Vantage Consultoria</h5>
                                        <p>Sistema de acompanhamento de serviços</p>
                                        <a href="https://cliente.vantageconsultoria.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja área de cliente</a>
                                        <a href="https://crm.vantageconsultoria.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o CRM</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/bom-cliente.jpg" alt="Área de cliente ObomAcordo.com">
                                      <div class="card-body">
                                        <h5 class="card-title">CRM e área de cliente ObomAcordo.com</h5>
                                        <p>Sistema de acompanhamento de serviços</p>
                                        <a href="https://cliente.obomacordo.com/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja área de cliente</a>
                                        <a href="https://crm.obomacordo.com/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o CRM</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/beg-site.jpg" alt="Site institucional B&G Soluções">
                                      <div class="card-body">
                                        <h5 class="card-title">B&G Soluções</h5>
                                        <p>Site institucional</p>
                                        <a href="https://begsolucoes.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o site</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/beg-land-1.jpg" alt="B&G Soluções">
                                      <div class="card-body">
                                        <h5 class="card-title">B&G Soluções</h5>
                                        <p>A melhor negociação</p>
                                        <a href="https://begsolucoes.com.br/lp-leads-w" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja a landing page</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/beg-land-2.jpg" alt="B&G Soluções">
                                      <div class="card-body">
                                        <h5 class="card-title">B&G Soluções</h5>
                                        <p>A melhor negociação</p>
                                        <a href="https://begsolucoes.com.br/landpage-2" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja a landing page</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/beg-land-3.jpg" alt="B&G Soluções">
                                      <div class="card-body">
                                        <h5 class="card-title">B&G Soluções</h5>
                                        <p>A melhor negociação</p>
                                        <a href="https://begsolucoes.com.br/landpage" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja a landing page</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/beg/top10.jpg" alt="Sistema Top 10 Chat">
                                      <div class="card-body">
                                        <h5 class="card-title">Top 10 Chat</h5>
                                        <p>Qualificando o seu atendimento.</p>
                                        <a href="https://top10app.digconverse.com.br/" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o sistema</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/DigConverse/login.jpg" alt="DigConverse: tela de login">
                                      <div class="card-body">
                                        <h5 class="card-title">DigConverse</h5>
                                        <p>Qualificando o seu atendimento.</p>
                                        <a href="https://logapp.digconverse.com.br/login" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o projeto</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/DigConverse/home.jpg" alt="DigConverse: painel inicial">
                                      <div class="card-body">
                                        <h5 class="card-title">DigConverse</h5>
                                        <p>Painel inicial do atendimento.</p>
                                        <a href="https://logapp.digconverse.com.br/login" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o projeto</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                     <div class="card">
                                      <img class="card-img-top" src="imagens/sites/DigConverse/contatos.jpg" alt="DigConverse: gestão de contatos">
                                      <div class="card-body">
                                        <h5 class="card-title">DigConverse</h5>
                                        <p>Gestão de contatos.</p>
                                        <a href="https://logapp.digconverse.com.br/login" target="_blank" rel="noopener" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-up-from-bracket"></i> Veja o projeto</a>
                                      </div>
                                    </div>
                                </div>

                                <h3>Outros Trabalhos</h3>

                                <div class="col-md-4 mb-5">
                                    <a href="https://appcomandacerta.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/ComandaCerta/1.jpg" alt="Site Comanda Certa" class="img-fluid rounded border"><p>www.appcomandacerta.com.br/</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://web.appcomandacerta.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/ComandaCerta/web.jpg" alt="Comanda Certa: painel web" class="img-fluid rounded border"><p>Comanda Certa: painel web</p></a>
                                </div>
                                 <div class="col-md-4 mb-5">
                                    <a href="https://loja.appcomandacerta.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/ComandaCerta/loja.jpg" alt="Comanda Certa: loja" class="img-fluid rounded border"><p>Comanda Certa: loja</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://entregador.appcomandacerta.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/ComandaCerta/entregador.jpg" alt="Comanda Certa: app do entregador" class="img-fluid rounded border"><p>Comanda Certa: entregador</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <img src="imagens/sites/PagCondominio/4.jpg" alt="PagCondomínio" class="img-fluid rounded border"><p>www.pagcondominio.com</p>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.parceiromoura.com.br" target="_blank" rel="noopener"><img src="imagens/sites/Moura/1.jpg" alt="Parceiro Moura" class="img-fluid rounded border"><p>www.parceiromoura.com.br</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.parceiromoura.com.br" target="_blank" rel="noopener"><img src="imagens/sites/Moura/2.jpg" alt="Parceiro Moura" class="img-fluid rounded border"><p>www.parceiromoura.com.br</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.parceiromoura.com.br" target="_blank" rel="noopener"><img src="imagens/sites/Moura/3.jpg" alt="Parceiro Moura" class="img-fluid rounded border"><p>www.parceiromoura.com.br</p></a>
                                </div>
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.rblesquadrias.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/rblesquadrias/1.jpg" alt="RBL Esquadrias" class="img-fluid rounded border"><p>www.rblesquadrias.com.br</p></a>
                                </div> 
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.rblesquadrias.com.br/" target="_blank" rel="noopener"><img src="imagens/sites/rblesquadrias/2.jpg" alt="RBL Esquadrias" class="img-fluid rounded border"><p>www.rblesquadrias.com.br</p></a>
                                </div> 
                                <div class="col-md-4 mb-5">
                                    <a href="https://www.linkedin.com/in/josearnaldolopes/" target="_blank" rel="noopener"><img src="imagens/linkedin.jpg" alt="Perfil no LinkedIn" class="img-fluid rounded border"><p>Veja todos meus trabalhos no Linkedin</p></a>
                                </div>
                            </div>
                        </div>

                        <p class="text-center"><a href="https://www.josearnaldo.net/curriculum/JoseArnaldo.pdf" target="_blank" rel="noopener" class="btn btn-primary px-4 py-2"><i class="fas fa-file-pdf" aria-hidden="true"></i> Baixar o Currículo (.PDF)</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section class="bg-light" id="qualificacoes">
            <div class="bg-white text-white pt-4">
                <div class="container">
                    <div class="title-3 bg-light">/qualificações</div>
                </div>
            </div>
            <div class="container-fluid px-4 pb-0">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">

                        <h5>Desenvolvimento Front-end</h5>
                        <p class="lead">Experiência no desenvolvimento com HTML, CSS e JavaScript, aliada a familiaridade com frameworks de UX/UI, como Bootstrap, jQuery, Tailwind CSS e Materialize. Possuo conhecimento em SASS para otimização de estilos CSS e experiência no uso de frameworks modernos, como Angular e React. Além disso, tenho sólidos conhecimentos em Acessibilidade Web e SEO, garantindo experiências inclusivas para todos os usuários e maior visibilidade nos motores de busca.</p>

                        <h5>Desenvolvimento Back-end</h5>
                        <p class="lead">Experiência com PHP, integrando o back-end ao front-end, tanto em projetos desenvolvidos com ou sem orientação a objetos quanto utilizando o framework Laravel. Realizo integrações com XML e JSON, além de desenvolver APIs RESTful robustas e eficientes. Tenho conhecimento sólido no uso de bancos de dados MySQL e PostgreSQL, garantindo soluções confiáveis e escaláveis. Adicionalmente, possuo familiaridade com linguagens como Python, Node.js e Java, ampliando minha versatilidade em diferentes tecnologias. No início da minha carreira, também adquiri experiência com ASP.</p>

                        <h5>Desenvolvimento Mobile</h5>
                        <p class="lead">Atualmente, estou utilizando o Flutter como principal ferramenta para desenvolvimento de aplicativos móveis, explorando suas capacidades para criar soluções eficientes e nativas.</p>

                        <h5>Banco de Dados</h5>
                        <p class="lead">Trabalho com MySQL e outros bancos de dados com a linguagem SQL, utilizando ferramentas como phpMyAdmin e MySQL Workbench para gerenciamento e administração</p>

                        <h5>Controle de Versão</h5>
                        <p class="lead">Familiaridade com o uso de Git para controle de versão, com experiência em plataformas como GitHub, GitLab e Bitbucket.</p>

                        <h5>Outras competências</h5>
                        <p class="lead">Scrum e Desenvolvimento Ágil, AWS, Google Cloud, Hostgator, Locaweb</p>
                        
                        <ul class="cloud" role="navigation" aria-label="Webdev word cloud">
                          <li><a href="javascript:void(0)" data-weight="10">FrontEnd</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">HTML</a></li>
                          <li><a href="javascript:void(0)" data-weight="7">JavaScript</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">jQuery</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">Angular</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">React.js</a></li>
                          <li><a href="javascript:void(0)" data-weight="9">CSS</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">Bootstrap</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">Flexbox</a></li>
                          <li><a href="javascript:void(0)" data-weight="5">Materialize</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">Tailwind</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">SASS</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">SEO</a></li>
                          <li><a href="javascript:void(0)" data-weight="5">UX</a></li>
                          <li><a href="javascript:void(0)" data-weight="10">BackEnd</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">PHP</a></li>
                          <li><a href="javascript:void(0)" data-weight="5">ORM</a></li>
                          <li><a href="javascript:void(0)" data-weight="8">CRUD</a></li>
                          <li><a href="javascript:void(0)" data-weight="4">API</a></li>
                                                    <li><a href="javascript:void(0)" data-weight="3">Laravel</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">Python</a></li>
                          <li><a href="javascript:void(0)" data-weight="7">Node.js</a></li>
                          <li><a href="javascript:void(0)" data-weight="7">Java</a></li>
                          <li><a href="javascript:void(0)" data-weight="7">Dart</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">SQL</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">PHPMyAdmin</a></li>
                          <li><a href="javascript:void(0)" data-weight="10">MySQL</a></li>
                          <li><a href="javascript:void(0)" data-weight="5">Scrum</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">WordPress</a></li>
                          <li><a href="javascript:void(0)" data-weight="3">GIT</a></li>
                          <li><a href="javascript:void(0)" data-weight="5">Container</a></li>
                          <li><a href="javascript:void(0)" data-weight="4">Composer</a></li>
                          <li><a href="javascript:void(0)" data-weight="4">Design Patterns</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">S.O.L.I.D.</a></li>
                          <li><a href="javascript:void(0)" data-weight="4">Desenvolvimento Ágil</a></li>
                          <li><a href="javascript:void(0)" data-weight="4">Orientação a Objetos</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">Clean Code</a></li>
                          <li><a href="javascript:void(0)" data-weight="6">MVC</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section-->
        <section id="contatos">
            <div class="bg-light text-white pt-4">
                <div class="container">
                    <div class="title-2 bg-dark">/contatos</div>
                </div>
            </div>
            <div class="container px-4">
                <div class="row">
                    <div class="col-md-6">
                        <form action="email.php" method="post" name="contato" class="formContato" novalidate>
                            <label for="nome">_nome</label><br>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="_nome" autocomplete="name" maxlength="100" required aria-describedby="erro-nome">
                            <div class="invalid-feedback" id="erro-nome"></div>
                            <br>
                            <label for="telefone">_telefone</label><br>
                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 91234-5678" autocomplete="tel-national" inputmode="numeric" maxlength="15" required aria-describedby="erro-telefone">
                            <div class="invalid-feedback" id="erro-telefone"></div>
                            <br>
                            <label for="email">_email</label><br>
                            <input type="email" class="form-control" id="email" name="email" placeholder="_email" autocomplete="email" maxlength="150" required aria-describedby="erro-email">
                            <div class="invalid-feedback" id="erro-email"></div>
                            <br>
                            <label for="mensagem">_mensagem</label><br>
                            <textarea class="form-control" id="mensagem" name="mensagem" placeholder="_mensagem" maxlength="5000" required aria-describedby="erro-mensagem"></textarea>
                            <div class="invalid-feedback" id="erro-mensagem"></div>
                            <!-- Campo isca anti-spam: fica escondido para pessoas -->
                            <div aria-hidden="true" style="position:absolute;left:-9999px"><input type="text" name="site" tabindex="-1" autocomplete="off"></div>
                            <br>
                            <input type="submit" class="btn btn-primary" id="btoContato" value="_enviar">
                            <p id="statusContato" class="mt-3 fw-bold" role="status" aria-live="polite"></p>
                        </form>
                    </div>
                    <div class="col-md-6 pt-4 social">
                        <p><a href="mailto:josearnaldo.net@gmail.com"><i class="fas fa-envelope" aria-hidden="true"></i> josearnaldo.net@gmail.com</a></p>
                        <p><a href="mailto:jose@josearnaldo.net"><i class="fas fa-envelope" aria-hidden="true"></i> jose@josearnaldo.net</a></p>
                        <p><a href="https://www.josearnaldo.net/linkedin" target="_blank" rel="noopener"><i class="fab fa-linkedin" aria-hidden="true"></i> www.josearnaldo.net/linkedin</a></p>
                        <p><a href="https://www.josearnaldo.net/github" target="_blank" rel="noopener"><i class="fa-brands fa-github-square" aria-hidden="true"></i> www.josearnaldo.net/github</a></p>
                        <p><a href="https://www.josearnaldo.net/curriculo" target="_blank" rel="noopener"><i class="fas fa-file-pdf" aria-hidden="true"></i> www.josearnaldo.net/curriculo</a></p>
                        <p><a href="tel:+5511973827134"><i class="fas fa-phone-square-alt" aria-hidden="true"></i> +55 11 97382-7134</a></p>
                        <p><a href="https://wa.me/5511973827134?text=Ol%C3%A1%20Jos%C3%A9%2C%20vim%20pelo%20site%20josearnaldo.net" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Fale comigo no WhatsApp</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white"><i class="fa fa-heart" aria-hidden="true"></i> Feito com amor, carinho e dedicação direto do terceiro planeta a partir do Sol.</p></div>
        </footer>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js?v=<?php echo $versao; ?>"></script>

    </body>
</html>

<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?= $pg_title; ?></title>
        <link rel="shortcut icon" href="img/favicon.png" />

        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/all-animation.css">
    </head>

    <body>
        <!--1º DOBRA-->
        <header class="container-fluid main_cabecalho">
            <h1 class="invisible"><?= $pg_title; ?></h1>
            <article class="row">
                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-4 main_cabecalho_titulo">
                    <h1><mark>Agência Digital</mark></h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_cabecalho_subtitulo">
                    <p class="tagline">Não Seja Comum, <mark>Seja ÚNICO</mark></p>
                </div>
            </article>
        </header>
        <!--FIM 1º DOBRA-->

        <!--MENU PRINCIPAL-->
        <div class="navbar navbar-inverse navbar-fixed-top main_menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <img src="<?= INCLUDE_PATH; ?>/img/logo.png" class="logo-cidtrix" alt="Cidtrix Soluções Web e Marketing Digital">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right menu-principal-lista">
                        <li><a href="">Início</a></li>
                        <li><a href="">Soluções</a></li>
                        <li><a href="">Portifólio</a></li>
                        <li><a href="">Solicite seu Projeto</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--FIM MENU PRINCIPAL-->

        <!--SOLUÇÕES - 2º DOBRA-->
        <section class="container main_solucoes">
            <div class="row main_solucoes_header">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="text-center main_solucoes_titulo">SOLUÇÕES</h1>
                    <p class="tagline text-center main_solucoes_subtitulo">CONHEÇA MELHOR NOSSAS ESPECIALIDADES</p>
                </div>
            </div>

            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <img src="<?= INCLUDE_PATH; ?>/img/criacao-web-sites.png" alt="Criação de Web Sites" >
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <h4>CRIAÇÃO DE WEBSITES</h4>
                            <hr>
                            <p class="text-justify">
                                Tenha seu site institucional ou loja virtual que funcione em todos os dispositivos da atualidade. Cada projeto que é realizado, possui uma grande base estratégica. Pois afinal, o seu site é o seu cartão de visita nesse vasto mundo da internet, e que necessita passar credibilidade, confiança e autoridade.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <img src="<?= INCLUDE_PATH; ?>/img/otimizacao-seo.png" alt="Otimização de Sites - SEO" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <h4>OTIMIZAÇÃO DE SITES - SEO</h4>
                            <hr>
                            <p class="text-justify">
                                Nossa consultoria em SEO irá potencializar e melhorar seu posicionamento(rankeamento) do seu site em sites de busca, como o Google. Afinal, lembre-se: Quem não é visto, não é lembrado!
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="row">
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <img src="<?= INCLUDE_PATH; ?>/img/marketing-digital.png" alt="Marketing Digital" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <h4>MARKETING DIGITAL</h4>
                            <hr>
                            <p class="text-justify">
                                Em todos os projetos desenvolvidos pela Cidtrix, buscamos sempre criar e manter um relacionamento íntegro e leal. Desta formaa, cada etapa é estudada e orgaanizada para que de fato possamos visualizar e entregar resultados aos nossos clientes.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <img src="<?= INCLUDE_PATH; ?>/img/consultoria-vendas-digital.png" alt="Consultoria emm Vendas Digitais" >
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
                            <h4>CONSULTORIA EM VENDAS DIGITAIS</h4>
                            <hr>
                            <p class="text-justify">
                                Trabalhando em um dos mais novos mercados da área de tecnologia e consultoria, a Cidtrix conta com profissionais altamente qualificados para trazer mais resultados para sua empresa neste mundo digital.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!--FIM SOLUÇÕES - 2º DOBRA-->

        <!--ORÇAMENTO - 3º DOBRA-->
        <section class="container-fluid main_contato1">
            <h1 class="invisible">Faça um Orçamento Online e sem Compromisso</h1>
            <div class="row">
                <aside class="col-xs-3 col-sm-5 col-md-4 col-lg-3 contato1-txt1">
                    <h2 class="text-center">Entre em Contato</h2>
                </aside>
                <aside class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-3 contato1-txt2">
                    <h2 class="text-center">Faça um Orçamento Online</h2>
                </aside>
            </div>
        </section>
        <!--FIM ORÇAMENTO - 3º DOBRA-->
        <!--SOBRE NÓS - 4º DOBRA-->
        <section class="container main_sobre">
            <h1 class="text-center">SOBRE NÓS</h1>
            <p class="tagline text-center">
                A Cidtrix é uma Empresa voltada para atender o Mercado Web como um todo.<br>
                Especializada em Marketing Digital, e na Criação de Websites, oferecemos o que há de maior qualidade e tecnologia para atender as expectativas dos nossos clientes.
            </p>
        </section>
        <!--FIM SOBRE NÓS - 4º DOBRA-->

        <!--WEBSITES - 5º DOBRA-->
        <section class="container-fluid main_websites">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 banner banner-left"></div>
                <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 banner banner-title">
                    <h1 class="text-center">WEBSITES</h1>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-8 col-lg-8 banner banner-right"></div>
            </div>
            <div class="container websites_img">
                <div id="slideWeb">
                    <div id="slideWebSites" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner"  align="center">
                            <article class="item active">
                                <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade">
                                <div class="carousel-text">
                                    <h3>PONTUALIDADE</h3>
                                    <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                </div>
                            </article>
                            <article class="item">
                                <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo">
                                <div class="carousel-text">
                                    <h3>RESPONSIVO</h3>
                                    <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                </div>
                            </article>
                            <article class="item">
                                <img src="<?= INCLUDE_PATH; ?>/img/seguranca.png" alt="Segurança">
                                <div class="carousel-text">
                                    <h3>SEGURANÇA</h3>
                                    <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                </div>
                            </article>
                        </div>
                        <a class="left carousel-control" href="#slideWebSites" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#slideWebSites" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <!--FIM WEBSITES - 5º DOBRA-->

        <!--MARKETIN DIGITAL - 6º DOBRA-->
        <section class="container-fluid main_marketing_digital">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 banner banner-left"></div>
                <div class="col-xs-6 col-sm-7 col-md-4 col-lg-4 banner banner-title">
                    <h1 class="text-center">MARKETING DIGITAL</h1>
                </div>
                <div class="col-xs-5 col-sm-4 col-md-7 col-lg-7 banner banner-right"></div>
            </div>
            <div class="marketing_img">
                <div class="container">
                    <div id="slideMarketing">
                        <div id="slideMarketingDigital" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner"  align="center">
                                <article class="item active">
                                    <img src="<?= INCLUDE_PATH; ?>/img/autoridade.png" alt="Autoridade">
                                    <div class="carousel-text">
                                        <h3>AUTORIDADE</h3>
                                        <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                    </div>
                                </article>
                                <article class="item">
                                    <img src="<?= INCLUDE_PATH; ?>/img/monitoramento.png" alt="Monitoramento">
                                    <div class="carousel-text">
                                        <h3>MONITORE</h3>
                                        <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                    </div>
                                </article>
                                <article class="item">
                                    <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados">
                                    <div class="carousel-text">
                                        <h3>RESULTADOS</h3>
                                        <p class="tagline">Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Mais vale um bebadis conhecidiss, que um alcoolatra anonimiss. Sapien in monti palavris qui num significa nadis i pareci latim. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                                    </div>
                                </article>
                            </div>
                            <a class="left carousel-control" href="#slideMarketingDigital" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class="right carousel-control" href="#slideMarketingDigital" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--FIM MARKETIN DIGITAL - 6º DOBRA-->

        <!--ENTRE EM CONTATO 7º DOBRA-->
        <section class="container-fluid main_contato2">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main_contato2-txt">
                    <h1 class="text-left">Alguma Dúvida?</h1>
                    <p class="tagline contato2-txt1">
                        Mande um <strong>e-mail</strong> diretamente para nós.
                        Esclareça Dúvidas. Mande Sugestões, Elogios.
                    </p>
                    <p class="tagline contato2-txt2">Estamos à Sua Disposição!</p>
                </div>
                <form class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main_contato2-form">
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-email input-group-lg">
                            <input type="text" class="form-control" name="nome" required="required" placeholder="Seu Nome">
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-email input-group-lg">
                            <input type="email" class="form-control" name="email" required="required" placeholder="Seu E-mail">
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-email input-group-lg">
                            <input type="tel" class="form-control" name="fone" placeholder="Seu Telefone">
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-email input-group-lg">
                            <input type="text" class="form-control" name="assunto" required="required" placeholder="Assunto do E-mail">
                        </div>
                    </div>
                    <div class="form-group form-group-lg div-form-email col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <textarea class="form-control" rows="4" name="mensagem" placeholder="Digite aqui sua Mensagem..." style="resize: none"></textarea>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-email input-group-lg">
                            <button type="submit" class=" btn btn-danger form-control">ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--FIM ENTRE EM CONTATO 7º DOBRA-->

        <!--PORTIFÓLIO-->
        <section class="container main_portifolio">
            <h1 class="text-center">
                Fique à Vontade<br>
                para ver nosso<br>
                <strong>Portifólio</strong>
            </h1>
            <h3 class="invisible">Todos</h3>
            <h3 class="invisible">WebSites</h3>
            <h3 class="invisible">Marketing Digital</h3>
            <h3 class="invisible">Identidade Visual</h3>



            <button type="button" class="btn btn-default btn-portifolio active" onclick="portifolioAtual(1)">Todos</button>
            <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(2)">Websites</button>
            <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(3)">Marketing Digital</button>
            <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(4)">Identidade Visual</button>

            <div class="container">
                <div class="row portifolio-item portifolio-todos enter-right-bounce" id="todos">
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                </div>
                <div class="row portifolio-item portifolio-site enter-right-bounce" id="sites">
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/responsivo.png" alt="Responsivo"> 
                    </div>
                </div>
                <div class="row portifolio-item portifolio-marketing enter-right-bounce" id="marketing">
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.png" alt="Pontualidade"> 
                    </div>
                </div>
                <div class="row portifolio-item portifolio-identidade enter-right-bounce" id="identidade">
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?= INCLUDE_PATH; ?>/img/resultados.png" alt="Resultados"> 
                    </div>
                </div>
            </div>





        </section>
        <!--FIM PORTIFÓLIO-->
        <!--ORÇAMENTO-->
        <section class="container">
            <h1><strong>Orçamento</strong></h1>
            <p class="tagline">
                Solite-nos um Orçamento. 
            </p>
            <p>Faça um Orçamento Conosco. Tire suas Dúvidas e Veja como Criamos sua Autoridade através do seu <mark>WebSite</mark>,
                da <mark>Otimização SEO</mark>, <mark>Gestão de Links Patrocinados</mark>, <mark>Gestão de Redes Sociais</mark>,
                <mark>Consultoria em Vendas Digitais</mark>, entre outros Serviços.</p>

            <form>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="fone" placeholder="Seu Melhor Telefone">
                <input type="text" name="assunto" placeholder="Assunto">
                <input type="text" name="mensagem" placeholder="Sua Mensagem" required>
                <button type="submit">Enviar</button>
            </form>
        </section>
        <!--FIM ORÇAMENTO-->

        <!--ENTRE EM CONTATO-->
        <section class="container">
            <h1><strong>Entre em Contato</strong> Com a CidTrix</h1>

            <article>
                <h3>Nosso Endereço</h3>
            </article>
            <article>
                <h3>Telefone</h3>
            </article>
            <article>
                <h3>Envie-nos um Email</h3>
                <p class="tagline">contato@cidtrix.com.br</p>
            </article>
        </section>
        <!--ENTRE EM CONTATO-->

        <!--REDES SOCIAIS DA CIDTRIX-->
        <section class="container">
            <h1 class="invisible">A Cidtrix Nas Redes Sociais</h1>
            <article>
                <h3 class="invisible">Curta Nossa Página No Facebook</h3>
                <img src="img/Facebook.png" alt="Curta Nossa Página No Facebook">
                <span>Compartilhe</span>
            </article>
            <article>
                <h3 class="invisible">Siga-nos no Twitter</h3>
                <img src="img/Twitter.png" alt="Siga-nos no Twitter">
                <span>Siga</span>
            </article>
            <article>
                <h3 class="invisible">Siga-nos no Instagram</h3>
                <img src="img/Instagram.png" alt="Siga-nos no Instagram">
            </article>
        </section>
        <!--FIM REDES SOCIAIS DA CIDTRIX-->

        <!--FOOTER COM CONTATO DA CIDTRIX-->
        <footer class="container">
            <section>
                <h1 class="invisible">Entre Em Contato Conosco</h1>
                <article>
                    <h3>MARINGÁ - PR</h3>
                    <p class="tagline">44 | 9888-0151</p>
                </article>
                <article>
                    <h3>ATENDIMENTO AO CLIENTE</h3>
                    <p class="tagline">VÍDEO CONFERÊNCIA</p>
                    <a href="#">Clique Aqui</a>
                </article>
                <article>
                    <h3>ATENDIMENTO AO CLIENTE</h3>
                    <p class="tagline">contato@cidtrix.com.br</p>
                    <a href="#">Clique Aqui</a>
                </article>

                <nav>
                    <h2 class="invisible">Mais Sobre a CidTrix - Agência de Marketing Digital</h2>
                    <ul class="nav navbar-nav">
                        <li><a href="">Início</a></li>
                        <li><a href="">Soluções</a></li>
                        <li><a href="">Portifólio</a></li>
                        <li><a href="">Solicite seu Projeto</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <p>&copy; <?= date('Y'); ?> - COPYRIGHT CIDTRIX, TODOS OS DIREITOS RESERVADOS.</p>

            </section>
        </footer>

        <script src="<?= INCLUDE_PATH; ?>/js/jquery-3.1.1.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/bootstrap.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/script.js"></script>
    </body>
</html>

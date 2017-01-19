<!--1º DOBRA-->
<header class="container-fluid main_cabecalho" id="inicio">
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
<?php require REQUIRE_PATH . '/inc/menu.php'; ?>
<!--FIM MENU PRINCIPAL-->

<!--SOLUÇÕES - 2º DOBRA-->
<section class="container main_solucoes" id="solucoes">
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
                    <p class="text-center">
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
                    <p class="text-center">
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
                    <p class="text-center">
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
                    <p class="text-center">
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
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 main_contato2-txt">
            <h1 class="text-left">Alguma Dúvida?</h1>
            <p class="tagline contato2-txt1">
                Mande um <strong>e-mail</strong> diretamente para nós.
                Esclareça Dúvidas. Mande Sugestões, Elogios.
            </p>
            <p class="tagline contato2-txt2">Estamos à Sua Disposição!</p>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
            <?php require REQUIRE_PATH . '/inc/formulario-email.php'; ?>
        </div>
    </div>
</section>
<!--FIM ENTRE EM CONTATO 7º DOBRA-->

<!--PORTIFÓLIO-->
<section class="container main_portifolio" id="portifolio">
    <h1 class="text-center">
        Fique à Vontade<br>
        para ver nosso<br>
        <strong>Portifólio</strong>
    </h1>
    <div class="div-btn">
        <button type="button" class="btn btn-default btn-portifolio active" onclick="portifolioAtual(1)">Todos</button>
        <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(2)">Websites</button>
        <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(3)">Marketing Digital</button>
        <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(4)">Identidade Visual</button>
    </div>
    <div class="container">
        <?php require REQUIRE_PATH . '/inc/portifolio.php'; ?>
    </div>
</section>
<!--FIM PORTIFÓLIO-->

<!--ORÇAMENTO-->
<section class="container-fluid main_orcamento" id="solicite-projeto">
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 main_orcamento-txt">
            <h1 class="main_orcamento-txt1 text-left"><strong>Orçamento</strong></h1>
            <p class="tagline main_orcamento-txt2 text-left">
                Solite-nos um Orçamento. 
            </p>
            <p class="main_orcamento-txt3 text-left">Faça um Orçamento Conosco. Tire suas Dúvidas e Veja como Criamos sua Autoridade através do seu <strong>WebSite</strong>,
                da <strong>Otimização SEO</strong>, <strong>Gestão de Links Patrocinados</strong>, <strong>Gestão de Redes Sociais</strong>,
                <strong>Consultoria em Vendas Digitais</strong>, entre outros Serviços.
            </p>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
            <?php require REQUIRE_PATH . '/inc/formulario-email.php'; ?>
        </div>
    </div>
</section>
<!--FIM ORÇAMENTO-->

<!--ENTRE EM CONTATO-->
<section class="container main_contato3" id="contato1">
    <div class="row ">
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 col-lg-offset-3">
            <h1 class="text-center"><strong>Entre em contato</strong> com a Cidtrix</h1>
        </div>
    </div>
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/endereco.png" alt="Endereço" class="img-responsive">
            <h3><strong>Nosso Endereço</strong></h3>
            <p class=" tagline">Rua da Santa Ceia, 159-B</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/telefone.png" alt="Telefone" class="img-responsive">
            <h3><strong>Telefone</strong></h3>
            <p class="tagline">44 98852-7951</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <img src="<?= INCLUDE_PATH; ?>/img/email.png" alt="Email" class="img-responsive">
            <h3><strong>Envie-nos um Email</strong></h3>
            <p class="tagline">contato@cidtrix.com.br</p>
        </article>
    </div>
</section>
<!--ENTRE EM CONTATO-->

<!--REDES SOCIAIS DA CIDTRIX-->
<section class="container-fluid main_redesociais">
    <h1 class="invisible">A Cidtrix Nas Redes Sociais</h1>
    <div class="row text-center">
        <article class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2 text-center">
            <h3 class="invisible">Curta Nossa Página No Facebook</h3>
            <a href="https://facebook.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/Facebook.png" alt="Curta Nossa Página No Facebook">
                <span>Compartilhe</span>
            </a>
        </article>
        <article class="col-xs-6 col-sm-6 col-md-4 col-lg-4 text-center">
            <h3 class="invisible">Siga-nos no Twitter</h3>
            <a href="https://twitter.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/Twitter.png" alt="Siga-nos no Twitter">
                <span>Siga</span>
            </a>
        </article>
    </div>
</section>
<!--FIM REDES SOCIAIS DA CIDTRIX-->

<div id="msg"></div>

<!--FOOTER COM CONTATO DA CIDTRIX-->
<footer class="container-fluid main_footer">
    <h1 class="invisible">Entre Em Contato Conosco</h1>
    <div class="container main_footer-contato">
        <div class="row text-center">
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?= INCLUDE_PATH; ?>/img/endereco-footer.png" alt="Endereço" class="img-responsive">
                <h5>MARINGÁ - PR</h5>
                <p class=" tagline">Rua da Santa Ceia, 159-B</p>
            </article>
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-contato-meio">
                <img src="<?= INCLUDE_PATH; ?>/img/fone-footer.png" alt="Telefone" class="img-responsive">
                <h5>ATENDIMENTO AO CLIENTE</h5>
                <p class="tagline">44 98852-7951</p>
            </article>
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?= INCLUDE_PATH; ?>/img/email-footer.png" alt="Email" class="img-responsive">
                <h5>ATENDIMENTO AO CLIENTE</h5>
                <p class="tagline">contato@cidtrix.com.br</p>
            </article>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav class=" col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 footer-menu text-center">
                <h2 class="invisible">Mais Sobre a CidTrix - Agência de Marketing Digital</h2>
                <ul class="nav navbar navbar-nav">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#solucoes">Soluções</a></li>
                    <li><a href="#portifolio">Portifólio</a></li>
                    <li><a href="#solicite-projeto"><strong>Solicite seu Projeto</strong></a></li>
                    <li><a href="#contato1">Contato</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>
    <p class="text-center">&copy; <?= date('Y'); ?> - COPYRIGHT CIDTRIX, TODOS OS DIREITOS RESERVADOS.</p>
</footer>
<div class="container">
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close disabled" disabled="disabled" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span id="titulo-modal" class="h3 text-center modal-title">Enviando seu E-mail...</span>
                </div>
                <div class="modal-body modal-retorno-email">
                    <p id="retorno-email" class="h4 text-center">
                        <img src="<?= INCLUDE_PATH; ?>/img/loading.gif">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger disabled" disabled="disabled" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
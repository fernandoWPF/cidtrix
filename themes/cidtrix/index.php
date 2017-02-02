<!--1º DOBRA-->
<header class="container-fluid main_cabecalho" id="inicio">
    <h1 class="invisible"><?= $pg_title; ?></h1>
    <article class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_cabecalho_titulo">
            <h1 class="text-center"><span>NÃO SEJA COMUM,</span> <mark>SEJA ÚNICO.</mark></h1>
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
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <img src="<?= INCLUDE_PATH; ?>/img/criacao-sites.png" alt="Criação de Web Sites" >
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h4>CRIAÇÃO DE SITES</h4>
                    <hr>
                    <p class="text-center">
                        Tenha seu site institucional que funcione em todos os dispositivos da atualidade. Cada projeto que é realizado, possui uma grande base estratégica. Pois afinal, o seu site é o seu cartão de visita, e que necessita passar credibilidade, confiança e autoridade.
                    </p>
                </div>
            </div>
        </article>


        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <img src="<?= INCLUDE_PATH; ?>/img/seo.png" alt="Otimização de Sites - SEO" >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h4>OTIMIZAÇÃO DE SITES - SEO</h4>
                    <hr>
                    <p class="text-center">
                        Nossa consultoria em SEO irá potencializar e melhorar seu posicionamento em sites de busca como o Google. Afinal, lembre-se: Quem não é visto, não é lembrado!
                    </p>
                </div>
            </div>
        </article>

        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <img src="<?= INCLUDE_PATH; ?>/img/consultoria.png" alt="Consultoria em Vendas Online" >
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h4>CONSULTORIA EM VENDAS DIGITAIS</h4>
                    <hr>
                    <p class="text-center">
                        Trabalhando em um dos mais novos mercados da área de tecnologia e consultoria, a Cidtrix conta com profissionais altamente qualificados em trazer melhores resultados para sua empresa.
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
        <aside class="col-xs-3 col-sm-5 col-md-4 col-lg-6 contato1-txt1">
            <h2 class="text-center">Entre em Contato</h2>
        </aside>
        <aside class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-5 col-lg-offset-1 contato1-txt2">
            <h2 class="text-center">Faça um Orçamento Online</h2>
        </aside>
    </div>
</section>
<!--FIM ORÇAMENTO - 3º DOBRA-->
<!--SOBRE NÓS - 4º DOBRA-->
<section class="container main_sobre">
    <h1 class="text-center">Por que somos <strong>ÚNICOS ?</strong></h1>
    <p class="tagline text-center">
        A Cidtrix é uma Empresa voltada para atender o Mercado Web como um todo.<br>
        Especializada na Criação e Otimização de Sites, oferecemos o que há de melhor qualidade em tecnologia, para atender as expectativas dos nossos clientes.<br>
        Somos únicos porque queremos e faremos com que você obtenha os resultados esperados, e que sua empresa atinja todo o seu verdadeiro potencial.<br>
        <strong>Veja nossos diferenciais.</strong>
    </p>
    <div class="row text-center main_sobre-item">
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/pontualidade.jpg" alt="Pontualidade" class="img-responsive">
                <h3>PONTUALIDADE</h3>
                <hr>
                <!--Um dos pontos mais valiosos que dão credibilidade para a empresa é passar um prazo e ter a responsabilidade de cumprir com o mesmo.--> 
                <p class="tagline">Aplicamos métodos e análises para o desenvolvimento do seu projeto de tal forma que o prazo determinado será o suficiente para entregá-lo 100% finalizado na data estipulada, além de você acompanhar cada etapa do seu desenvolvimento.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/responsivo.jpg" alt="Responsivo" class="img-responsive">
                <h3>RESPONSIVO</h3>
                <hr>
                <p class="tagline">Todos os nossos projetos são desenvolvidos para que adaptem a qualquer dispositivo. Seus clientes poderão acessar o seu site de qualquer aparelho, seja ele um smartphone, tablet ou notebook, independentemente do tamanho de sua tela.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/autoridade.jpg" alt="Autoridade" class="img-responsive">
                <h3>AUTORIDADE</h3>
                <hr>
                <p class="tagline">Através da identidade visual desenvolvida pela Cidtrix, sua empresa possuirá um destaque maior no mercado, passando credibilidade e autoridade para os seus clientes. Deixe com a gente, somos especialistas nisso.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/monitoramento.jpg" alt="Monitoramento" class="img-responsive">
                <h3>MONITORE</h3>
                <hr>
                <p class="tagline">Através de ferramentas como o Google Analytics incorporadas ao seu site, você poderá monitorar todo o tráfego em sua empresa na internet, como por exemplo, quem está acessando a sua empresa, por onde estão acessando e de onde estão acessando.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/equipe-qualificada.jpg" alt="Equipe qualificada" class="img-responsive">
                <h3>EQUIPE QUALIFICADA</h3>
                <hr>
                <p class="tagline">Nossa equipe conta com profissionais altamente qualificados capaz de trazer resultados surpreendentes para sua empresa. Analisamos cada caso, estudamos o comportamento do mercado, temos sempre soluções inovadoras em mente.</p>
            </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
                <img src="<?= INCLUDE_PATH; ?>/img/resultados.jpg" alt="Resultados" class="img-responsive">
                <h3>RESULTADOS</h3>
                <hr>
                <p class="tagline">Garantimos sempre os melhores resultados. Invista na sua empresa, utilize todo o potêncial oferecido pelo mundo digital. Tenha essa experiência conosco. Descubra-se com a gente!</p>
            </div>
        </article>
    </div>
</section>
<!--FIM Sites - 5º DOBRA-->

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
        <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(2)">Sites</button>
        <button type="button" class="btn btn-default btn-portifolio" onclick="portifolioAtual(3)">Identidade Visual</button>
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
            <p class="main_orcamento-txt3 text-left">Faça um Orçamento Conosco. Tire suas Dúvidas e Veja como Criamos sua Autoridade através do seu <strong>Site</strong>,
                da <strong>Otimização SEO</strong>, <strong>Gestão de Redes Sociais</strong>,
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
    <div class="row" align="center">
        <article class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col-md-offset-2">
            <h3 class="invisible">Curta Nossa Página No Facebook</h3>
            <a href="https://facebook.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/facebook.png" alt="Curta Nossa Página No Facebook">
                <span class="text-left">Compartilhe</span>
            </a>
        </article>
        <article class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <h3 class="invisible">Siga-nos no Twitter</h3>
            <a href="https://twitter.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/twitter.png" alt="Siga-nos no Twitter">
                <span class="text-left">Siga</span>
            </a>
        </article>
        <article class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <h3 class="invisible">Curta-nos no Instagram</h3>
            <a href="https://www.instagram.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/instagram.png" alt="Curta-nos no Instagram">
                <span class="text-left">Curta</span>
            </a>
        </article>
        <article class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
            <h3 class="invisible">Conecte-se no Google+</h3>
            <a href="https://plus.google.com" target="_blank">
                <img src="<?= INCLUDE_PATH; ?>/img/g+.png" alt="Conecte-se no Google+">
                <span class="text-left">Conecte-se</span>
            </a>
        </article>
    </div>
</section>
<!--FIM REDES SOCIAIS DA CIDTRIX-->

<div id="msg"></div>

<!--FOOTER COM CONTATO DA CIDTRIX-->
<footer class="container-fluid main_footer" itemprop="provider" itemscope itemtype="http://schema.org/Organization">
    <h1 class="invisible">Entre Em Contato Conosco</h1>
    <div class="container main_footer-contato">
        <div class="row text-center">
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?= INCLUDE_PATH; ?>/img/endereco-footer.png" alt="Endereço" class="img-responsive" width="40" height="40">
                <h5>MARINGÁ - PR</h5>
                <p class=" tagline">Rua da Santa Ceia, 159-B</p>
            </article>
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 footer-contato-meio">
                <img src="<?= INCLUDE_PATH; ?>/img/fone-footer.png" alt="Telefone" class="img-responsive" width="40" height="40">
                <h5>ATENDIMENTO AO CLIENTE</h5>
                <p class="tagline">44 98852-7951</p>
            </article>
            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?= INCLUDE_PATH; ?>/img/email-footer.png" alt="Email" class="img-responsive" width="40" height="40">
                <h5>ATENDIMENTO AO CLIENTE</h5>
                <p class="tagline">contato@cidtrix.com.br</p>
            </article>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <nav class=" col-md-12 col-lg-12 footer-menu">
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
    <p class="text-center">&copy; <?= date('Y'); ?> - <span itemprop="name">CIDTRIX - Soluções</span> </span>, TODOS OS DIREITOS RESERVADOS.</p>
    <meta itemprop="sameAs" content="https://www.cidtrix.com.br"/>
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
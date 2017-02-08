<?php

define('HOME', './');
define('THEME', 'cidtrix');
define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Cidtrix | Criação de Sites e Consultoria em Maringá';
$pg_site = 'Cidtrix | Criação de Sites e Consultoria em Maringá';
$pg_google_author = '';//CRIAR CONTA DO GOOGLE+ CLICAR NA FOTO E PEGAR O OID DA URL
$pg_google_publisher = '';//VER AULA 33 NO MINUTO 7:00
$pg_fb_app = '';//VER AULA 34 A PARTIR DO MINUTO 8:00
$pg_fb_author = '';//CRIAR A PÁGINA DA CIDTRIX NO FACE ::VER MINUTO 5:00 DA AULA 34:: 
$pg_fb_page = '';//CRIAR A PÁGINA DA CIDTRIX NO FACE ::VER MINUTO 5:00 DA AULA 34::
$pg_twitter = '';//CRIAR CONTA NO TWITTER - VER AULA 35
$pg_domain = 'www.cidtrix.com.br';

$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'CidTrix Soluções. Somos especializados na criação e otimização de sites, criação de identidade visual e consultoria em vendas online.';
        $pg_image = $pg_sitekit . 'cidtrix.png';
        $pg_url = HOME;
        break;

    default :
        $pg_title = 'Ops! Não encontramos essa página!';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b>' . $setUrl . '</b>, mas não saia ainda. Que tal voltar ao nosso Site?';
        $pg_image = $pg_sitekit . 'cidtrix.png';
        $pg_url = HOME . '404';
        break;
endswitch;






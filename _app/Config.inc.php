<?php

define('HOME', 'http://10.24.50.21/cidtrix');
define('THEME', 'html');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'CIDTRIX Soluções em WebSites e Marketing Digital';
$pg_site = 'CIDTRIX';
$pg_google_author = '';
$pg_google_publisher = '';
$pg_fb_app = '';
$pg_fb_author = '';
$pg_fb_page = '';
$pg_twitter = '';
$pg_domain = 'www.cidtrix.com.br';
$pg_sitekit = INCLUDE_PATH . 'img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = '';
        $pg_image = $pg_sitekit . 'index.png';
        $pg_url = HOME;
        break;

    default :
        $pg_title = 'Desculpe, não encontrado o conteúdo relacionado.';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b>' . $setUrl . '</b>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!';
        $pg_image = $pg_sitekit . '404.png';
        $pg_url = HOME;
        break;
endswitch;






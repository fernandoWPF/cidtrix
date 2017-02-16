<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/><!--PARA QUE O GOOGLE SIGA A ESTRUTURA DA PÁGINA-->

        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts"/>
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher; ?>"/>
        <link rel="canonical" href="<?= $pg_url; ?>"/>
        <link rel="alternate" hreflang="pt-br" href="http://www.cidtrix.com.br" />

        <meta itemprop="name" content="<?= $pg_site; ?>">
        <meta itemprop="description" content="<?= $pg_desc; ?>">
        <meta itemprop="image" content="<?= $pg_image; ?>">
        <meta itemprop="url" content="http://cidtrix.com.br">

        <meta property="og:type" content="article">
        <meta property="og:title" content="<?= $pg_title; ?>">
        <meta property="og:description" content="<?= $pg_desc; ?>">
        <meta property="og:image" content="<?= $pg_image; ?>">
        <meta property="og:url" content="<?= $pg_url; ?>">
        <meta property="og:site_name" content="<?= $pg_site; ?>">
        <meta property="og:locale" content="pt_BR">
        <meta property="author" content="https://www.facebook.com/<?= $pg_fb_author; ?>">
        <meta property="publisher" content="https://www.facebook.com/<?= $pg_fb_page; ?>">

        <meta property="twitter:card" content="sumary_large_image">
        <meta property="twitter:site" content="<?= $pg_twitter; ?>">
        <meta property="twitter:domain" content="<?= $pg_domain; ?>">
        <meta property="twitter:title" content="<?= $pg_title; ?>">
        <meta property="twitter:description" content="<?= $pg_desc; ?>">
        <meta property="twitter:image:src" content="<?= $pg_image; ?>">
        <meta property="twitter:url" content="<?= $pg_url; ?>">

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->  

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/bootstrap.min.css">

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png" />
    </head>

    <body>
        <?php
        require REQUIRE_PATH . '/inc/analyticstracking.php';
        ?>
        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);
        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTEUDO-->

        <script src="<?= HOME; ?>/_cdn/jquery-3.1.1.min.js"></script>
        <script src="<?= HOME; ?>/_cdn/bootstrap.min.js"></script>
        <script src="<?= HOME; ?>/_cdn/script.js"></script>
        <script src="<?= HOME; ?>/_cdn/mail.js"></script>
        <script src="<?= HOME; ?>/_cdn/animation.js"></script>

    </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mixen">
    <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/';?>img/favicon.ico"/>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/ekko-lightbox.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head();?>
    <title>IBS Consultores</title>

    <script src="<?php echo bloginfo('template_url').'/';?>js/jquery-1.12.0.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-105574825-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll nav-logo">
            <img src="<?php echo bloginfo('template_url').'/';?>img/icons/logo-20aniv.png" alt="logo" class="vertical-align">
        </a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php if (is_front_page()) { echo '#index';} else { echo get_site_url(); }?>" class="<?php if (is_front_page()) { echo 'item-menu';} else { echo ''; }?> vertical-align nav-padd">INICIO</a></li>
                <li><a href="<?php if (is_front_page()) { echo '#nosotros';} else { echo get_site_url(); }?>" class="item-menu vertical-align nav-padd">NOSOTROS</a></li>
                <li><a href="<?php if (is_front_page()) { echo '#seguros';} else { echo get_site_url(); }?>" class="item-menu vertical-align nav-padd">ASEGURADORAS</a></li>
                <li><a href="<?php if (is_front_page()) { echo '#servicios';} else { echo get_site_url(); }?>" class="item-menu vertical-align nav-padd">PRODUCTOS</a></li>
                <li><a href="<?php if (is_front_page()) { echo '#noticias'; } else { echo get_site_url(); } ?>" class="item-menu vertical-align nav-padd">NOTICIAS</a></li>
                <li><a href="<?php if (is_front_page()) { echo '#contacto'; } else { echo get_site_url(); } ?>" class="item-menu vertical-align nav-padd">CONTACTO</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle vertical-align" role="button" aria-haspopup="true" aria-expanded="false">SEGUROS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="seguros?opcion=danos#" class="menu-item">DAÑOS</a></li>
                        <li><a href="seguros?opcion=casa#" class="menu-item">CASA</a></li>
                        <li><a href="seguros?opcion=empresarial#" class="menu-item">EMPRESARIAL</a></li>
                        <li><a href="seguros?opcion=auto#" class="menu-item">AUTO</a></li>
                        <li><a href="seguros?opcion=accidentes#" class="menu-item">ACCIDENTES</a></li>
                        <li><a href="seguros?opcion=medicos#" class="menu-item">GASTOS MÉDICOS</a></li>
                        <li><a href="seguros?opcion=jubilacion#" class="menu-item">JUBILACIÓN</a></li>
                        <li><a href="seguros?opcion=educacional#" class="menu-item">EDUCACIONAL</a></li>
                        <li><a href="seguros?opcion=vida#" class="menu-item">VIDA</a></li>
                    </ul>
                </li>
                <li class="no-after"><a href="#" class="smoothScroll vertical-align nav-padd">DESCARGABLES</a></li>
                <li class="no-after"><a href="http://voysegurousa.com.mx" class="smoothScroll vertical-align nav-padd"><img src="<?php echo bloginfo('template_url').'/';?>img/icons/logo-voy.png" alt="" class="img-fluid"></a></li>
            </ul>
        </div>
    </div>
</nav>
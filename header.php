<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="redetv-bar">
            <div class="container_12">
                <a class="redetv-brand grid_2 alpha" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/redetv.png"></a>
                <ul class="redetv-menu grid_10">
                    <li><a href="">Programação</a></li>
                    <li><a href="">TV Fama</a></li>
                    <li><a href="">Notícias</a></li>
                    <li><a href="">Esporte</a></li>
                    <li><a href="">Vídeos</a></li>
                    <li><a href="">É Zueira</a></li>
                    <li><a href="">Receita todo dia</a></li>
                </ul>
            </div>
        </nav>
        <section class="header-content">
            <div class="container_12">
                <div class="brand grid_4">
                    <a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/viagemcultural.png"></a>
                </div>
            </div>
            <div class="container_12">
                <nav class="menu clearfix">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>">Inicío</a></li>
                        <li><a>Dicas de viagem</a>
                            <div class="spacing-arrow">
                                <div class="top-arrow"></div>
                            </div>
                            <div class="submenu">
                                <ul>
                                    <li><a>Internacional</a>
                                        <ul>
                                            <li><a href="#">África</a></li>
                                            <li><a href="#">América</a></li>
                                            <li><a href="#">Ásia</a></li>
                                            <li><a href="#">Europa</a></li>
                                            <li><a href="#">Oceania</a></li>
                                        </ul>
                                    </li>
                                    <li><a>Nacional</a>
                                        <ul>
                                            <li><a href="#">Centro-oeste</a></li>
                                            <li><a href="#">Nordeste</a></li>
                                            <li><a href="#">Norte</a></li>
                                            <li><a href="#">Sul</a></li>
                                            <li><a href="#">Sudeste</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="">Episódios</a></li>
                        <?php custom_nav_menu(); ?>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
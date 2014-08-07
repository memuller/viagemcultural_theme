<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/image-scale.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="redetv-bar">
            <div class="container_12">
                <a class="redetv-brand grid_2 alpha" href="http://www.redetv.uol.com.br/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/redetv.png"></a>
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
                                    <li>
										<a href="<?php echo home_url('/regiao/'.'internacional') ?>"><span>Internacional</span></a>
									</li>
                                    <li>
										<a href="<?php echo home_url('/regiao/'.'nacional') ?>"><span>Nacional</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php bloginfo('url'); ?>/videos">Episódios</a></li>
                        <?php custom_nav_menu(); ?>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/image-scale/image-scale.min.js"></script>
    
</head>
<body <?php body_class() ?>>
    <header class="header">
        <nav class="redetv-bar">
            <div class="container_12">
                <a class="redetv-brand grid_2 alpha" href="http://www.redetv.uol.com.br/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/redetv.png"></a>
				<span>Todos os domingos às 18h30 para todo o Brasil!</span>
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
                        <li class="region"><span>Dicas de viagem</span>
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
                        <li class="videos"><span>Vídeos</span>
							<div class="spacing-arrow">
                                <div class="top-arrow"></div>
                            </div>
                            <div class="submenu">
                                <ul>
                                    <li>
										<a href="<?php echo home_url('/videos/'.'programas-completos') ?>"><span>Programa Completo</span></a>
									</li>
                                    <li>
										<a href="<?php echo home_url('/videos/'.'melhores-momentos') ?>"><span>Melhores momentos</span></a>
                                    </li>
                                </ul>
                            </div>
						</li>
						<li class="about"><span>O Programa</span>
							<div class="spacing-arrow">
                                <div class="top-arrow"></div>
                            </div>
                            <div class="submenu">
                                <ul>
                                    <li>
										<a href="<?php echo home_url('/sobre') ?>"><span>Sobre o programa</span></a>
									</li>
                                    <li>
										<a href="<?php echo home_url('/apresentador') ?>"><span>O Apresentador</span></a>
                                    </li>
                                </ul>
                            </div>
						</li>
                        <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'container' => false, 'sort_column' => 'menu_order' ) ); ?>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
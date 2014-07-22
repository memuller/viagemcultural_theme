<?php global $post_object, $post; ?>
<aside class="grid_4 alpha omega">
    <section class="advertising">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/temporary/advertising.png"/>
    </section>
    <section class="related">
        <?php if (!$post_object->next): ?>
            <div class="episode grid_4 alpha omega">
                <h1>Assista o Episódio</h1>
                <ul class="clearfix">
                    <?php foreach ($post_object->children('video') as $video): ?>
                        <li class="grid_4 alpha omega">
                            <a href="<?php echo $video->permalink ?>">
                                <div class="episode-image clearfix">
                                    <?php echo get_the_post_thumbnail($video->base->ID, 'sidebar_thumbnail', array('class' => 'grid_2 alpha')) ?>
                                    <img class="play" src="<?php bloginfo('template_directory'); ?>/images/play.png"/>
                                </div>
                                <h2 class="grid_2 omega"><?php echo $video->title ?></h2>
                                <span class="exhibition grid_2 omega">Programa do dia: <time><?php echo $video->broadcast_date ?></time></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ?>
        <div class="related-tips grid_4 alpha omega">
            <h1>Veja outras dicas</h1>
            <ul class="clearfix">
                <li class="grid_4 alpha omega">
                    <a href="#">
                        <img class="grid_2 alpha" src=""/>
                        <h2 class="grid_2 omega">Lorem Ipsum</h2>
                    </a>
                </li>
                <li class="grid_4 alpha omega">
                    <a href="#">
                        <img class="grid_2 alpha" src=""/>
                        <h2 class="grid_2 omega">Lorem Ipsum</h2>
                    </a>
                </li>
                <li class="grid_4 alpha omega">
                    <a href="#">
                        <img class="grid_2 alpha" src=""/>
                        <h2 class="grid_2 omega">Lorem Ipsum</h2>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</aside>
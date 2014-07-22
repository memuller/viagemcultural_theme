<?php
/*
Template Name: Lista videos
*/
get_header(); ?>

<section class="container">
    <div class="container_12">
        <h1 class="grid_8">Episódios do programa</h1>
    </div>
    <div class="box container_12">
        <ul class="episodes clearfix">
            <?php while (have_posts()) : the_post(); $video = new \ViagemCultural\Video($post); $travel = $video->parent();  ?>
                <li class="episode grid_11 alpha omega">
                    <div class="episode-image">
                        <?php echo get_the_post_thumbnail($post->ID, 'episode_thumbnail', array('class' => 'scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
                        <img class="play" src="<?php bloginfo('template_directory'); ?>/images/play.png"/>
                    </div>
                    <div class="episode-info">
                        <h2><?php the_title() ?></h2>
                        <div class="buttons">
                            <?php if ($travel): ?>
                                <a href="<?php echo $travel->permalink ?>" class="button-blue">Ver dica</a>    
                            <?php endif ?>
                            <a href="<?php echo $video->permalink ?>" class="button-blue">Assistir o programa</a>
                            <span>Programa exibido dia: <time><?php the_('broadcast_date') ?></time></span>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="pagination">
            <div class="pagination-buttons">
                <?php next_posts_link('Episódios mais novos') ?>
                <?php previous_posts_link('Episódios mais antigos') ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
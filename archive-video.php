<?php
/*
Template Name: Lista videos
*/
get_header(); global $posts; ?>

<section class="container">
    <div class="container_12">
        <h1 class="grid_8">Episódios do programa</h1>
    </div>
    <div class="box episodes-archive container_12">
        <?php if (empty($posts)): ?>
            <h3>Não há conteúdo disponível ainda.</h3>
			<a class="button-blue" href="<? bloginfo( 'url' ); ?>">Voltar para o início</a>
        <?php else: ?>
            <ul class="episodes clearfix">
                <?php foreach ($posts as $post) { setup_postdata($post); $video = new \ViagemCultural\Video($post); $travel = $video->parent();  ?>
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
                                <span>Programa exibido dia: <time><?php echo get_the_('broadcast_date') ?></time></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
            <div class="pagination">
                <div class="pagination-buttons">
                    <?php next_posts_link('Episódios mais novos') ?>
                    <?php previous_posts_link('Episódios mais antigos') ?>
                </div>
            </div>
        <?php endif ?>
    </div>
</section>

<?php get_footer(); ?>
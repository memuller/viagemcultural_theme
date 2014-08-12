<?php
/*
Template Name: Lista dicas
*/
get_header(); global $wp_query; 
if(is_tax()){
    $term = $wp_query->get_queried_object();
    $title = $term->name;
}
?>
<section class="container">
	<div class="advertising">
		<img src="">
	</div>
    <div class="container_12">
        <h1 class="grid_8">Dicas de Viagem <?php if(isset($title)) echo " - ".$title; ?></h1>
        <?php print_r($term_name); ?>
    </div>
    <div class="box container_12">
        <ul class="tip-list grid_8">
            <?php while (have_posts()) : the_post();
                $travel = new \ViagemCultural\Travel($post); 
                $video = $travel->videos(); if($video) $video = $video[0];  
            ?>
                <li class="tip clearfix">
                    <article>
                        <div class="tip-thumb grid_3 alpha omega">
                             <?php echo get_the_post_thumbnail($post->ID, 'episode_thumbnail', array('class' => 'scale', 'data-scale' => 'best-fill', 'data-align' => 'center')) ?>
                        </div>
                        <div class="grid_5 alpha omega">
                            <h1 class="tip-title"><?php the_title() ?></h1>
                            <div class="tip-links">
                                <a href="<?php echo $travel->permalink ?>" class="button-blue">Saiba mais</a>
                                <?php if($video){ ?>
                                    <a href="<?php echo $video->permalink ?>" class="button-blue">Assistir o programa</a>
                                <?php } ?>
                            </div>
                        </div>
                    </article>
                </li>
            <?php endwhile; ?>
        </ul>
		<?php get_template_part('sidebar', 'archive'); ?>
        <div class="pagination">
            <div class="pagination-buttons">
                <?php next_posts_link('Dicas mais antigas') ?>
                <?php previous_posts_link('Dicas mais novas') ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
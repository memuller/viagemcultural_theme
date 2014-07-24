<?php
/*
Template Name: Episódio
*/
get_header(); 
global $post_object, $post;  
$post_object = new \ViagemCultural\Video($post);
$travel = $post_object->parent();
?>

<section class="container container_12">
    <article>
        <header class="entry-title grid_8">
            <h1><?php the_title() ?></h1>
        </header>
        <div class="box entry-container grid_12">
            <div class="entry-video grid_12 alpha omega">
                <?php debug(get_post_meta($post->ID, 'url', true)) ?>
                <?php echo wp_oembed_get(get_the('url'), array('width' => 940)) ?>
            </div>
            <div class="entry-description grid_12 alpha omega">
                <div class="date-info grid_12 alpha">
                    <span>Programa exibido dia: <time><?php echo get_the_('broadcast_date') ?></time></span>
                    <a href="<?php echo $travel->permalink ?>" class="button-blue">Dicas sobre República Tcheca</a>
                </div>
                <div class="video-info grid_10">
                    <p> <?php echo $travel->description ?> </p>
                </div>
            </div>
        </div>
    </article>
</section>
<?php get_footer(); ?>
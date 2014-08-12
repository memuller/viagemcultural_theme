<?php
/*
Template Name: Dica
*/
get_header(); 
global $post, $post_object; $post_object = new \ViagemCultural\Travel($post);
?>
<section class="container container_12">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <article class="clearfix">
                <header class=" grid_8 entry-title">
                    <h1><?php the_title() ?></h1>
                </header>
                <div class="box entry-container grid_12">
                    <div class="entry-content grid_8 alpha omega">
                        <?php if ($post_object->next): ?>
                            <?php echo get_the_('teaser') ?>
                        <?php else: ?>
                            <?php the_content() ?>
                        <?php endif; ?>
						<?php comments_template(); ?>
                    </div>
                    <?php get_sidebar();?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
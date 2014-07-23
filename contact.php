<?php
/*
Template Name: Contato
*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="container">
    <div class="container_12">
        <h1 class="grid_8"><?php the_title(); ?></h1>
    </div>
    <div class="box contact-entry container_12 clearfix">
        <?php the_content(); ?>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
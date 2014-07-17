<?php
/*
Template Name: Dica
*/
get_header(); ?>
<section class="container container_12">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
            <article>
                <header class=" grid_8 entry-title">
                    <h1>Lorem Ipsum</h1>
                </header>
                <div class="box entry-container grid_12">
                    <div class="entry-content grid_8 alpha omega">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet neque eleifend, varius mauris et, hendrerit sapien. Fusce a orci in lorem tristique dignissim. Curabitur elit ipsum, fringilla eget sem sed, hendrerit egestas justo. Vivamus auctor sem vel ullamcorper imperdiet. Nullam non orci ut dui porttitor euismod. Sed pretium, risus id lacinia venenatis, nisl est consequat lorem, et ornare leo lacus id tortor. Phasellus lobortis, arcu eget faucibus feugiat, metus nisl bibendum quam, sed placerat leo magna vel nunc. Phasellus quis porta nulla. Aliquam erat volutpat. Cras volutpat odio in felis pulvinar volutpat. Morbi pretium fermentum auctor.</p>
                        <p>Mauris volutpat vel mauris eget adipiscing. Aliquam at enim sit amet purus porttitor pretium et eget arcu. Mauris ornare purus a urna sodales, sit amet aliquam elit tincidunt. Proin tincidunt purus vitae dui mollis convallis. Fusce dapibus velit sed felis vulputate rutrum. Sed molestie gravida elit at pellentesque. Quisque turpis metus, imperdiet in commodo sit amet, rutrum in velit. Quisque quis augue at sem malesuada pretium vitae eget turpis. Mauris turpis sapien, vehicula elementum condimentum eget, accumsan non dolor. Praesent placerat felis vel mauris dapibus, in scelerisque augue laoreet. Nulla consectetur auctor dolor id pretium. Maecenas eu tristique sapien. Donec ac erat lacus. Donec sagittis vitae lorem eu porta.</p>
                        <p>Duis mattis purus neque, sagittis pellentesque metus venenatis vel. Donec tincidunt at ligula quis lacinia. Maecenas vitae venenatis nisl, a volutpat diam. Sed porttitor adipiscing commodo. Morbi hendrerit, erat id interdum euismod, justo eros pulvinar massa, at varius lorem nisl vitae massa. Pellentesque vel aliquam risus, in lacinia ligula. Aliquam laoreet non urna eu adipiscing. Sed eget porttitor tellus, id tincidunt dolor. Vestibulum feugiat sagittis cursus. Donec ornare arcu a viverra congue. Vestibulum tempor enim nibh, luctus ullamcorper turpis rhoncus sit amet. Phasellus feugiat venenatis dui a mollis. Etiam sed faucibus dui, vel laoreet tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer accumsan quam purus, non hendrerit neque scelerisque vel. Nulla sagittis neque in tortor sollicitudin, eget pellentesque lacus vehicula.</p>
                    </div>
                    <?php get_sidebar();?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
<?php
require_once 'lib/enqueue.php';
add_theme_support('menus');
add_image_size( 'trip_thumbnail', 940, 410, array( 'center', 'center' ));
add_image_size( 'tip_thumbnail', 300, 250, array( 'center', 'center' ));

function custom_nav_menu()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );
    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);
}
function default_page_menu() {
   wp_list_pages('title_li=');
} 

?>
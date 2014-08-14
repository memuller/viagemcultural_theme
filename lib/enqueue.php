<?php
/**
 * Enqueue scripts and stylesheets
 */

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/main.min.css', false, 'f7b7623bb972a31299d02ce12877397e');

  wp_register_script('main_scripts', get_stylesheet_directory_uri() . '/assets/main.min.js', array('jquery'), '39174fa91b1062f069ab8ac3c65be90f', true);
  wp_enqueue_script( 'main_scripts');
  wp_localize_script('main_scripts', 'Wordpress', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'home_url' => home_url()
  ));
});
if (defined('GOOGLE_ANALYTICS_ID')) {
  add_action('wp_footer', function(){ ?>
    <script>
      var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  <?php }, 20);
} ?>
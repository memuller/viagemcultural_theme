<?php
/**
 * Enqueue scripts and stylesheets
 */

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/main.min.css', false, '7f17e31cc61b9368f5518fcb0e6de4b4');

  wp_register_script('main_scripts', get_stylesheet_directory_uri() . '/assets/main.min.js', array('jquery'), 'c320834193c0fe3fab60174f32edef70', true);
  wp_enqueue_script( 'main_scripts');
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
<?php
require_once 'lib/enqueue.php';

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size( 'trip_thumbnail', 940, 410 );
add_image_size( 'tip_thumbnail', 300, 250 );
add_image_size( 'sidebar_thumbnail', 140, 100 );
add_image_size( 'episode_thumbnail', 180, 150 );


	function get_the_($field){
		global $post, $post_object ;

		if($post->post_type == 'page') 
			return get_post_meta($post->ID, $field, true); 

		$class = '\\ViagemCultural\\' . ucfirst($post->post_type) ;

		if (empty($post_object) || $post_object->ID != $post->ID){
			$post_object = new $class($post) ;
		}

		if($class::$fields[$field]['type'] == 'set') return $post_object->set($field);

		return $post_object->$field  ;

	}
	function the_($field, $editable = false){
		global $post, $post_object ;
		$class = '\\ViagemCultural\\' . ucfirst($post->post_type) ;
		$value = get_the_($field);
		$editable_when_filled = true ; $empty = false ; 
		if(!is_single($post->ID)) $editable = false ; 
		if(!$editable_when_filled && !(($value && !empty($value) )|| intval($value) === 0)) $editable = false ;

		$data_type = $field == 'content' ? 'textarea' : $class::$fields[$field]['type'] ;
		if(!in_array($data_type, array('text', 'textarea', 'select', 'date', 'checklist'))) $data_type = 'text' ;
		$tag_properties = $editable ? sprintf("data-name='%s' data-type='%s' data-pk='%s' data-url='%s'", 
			$field, $data_type, $post->ID, admin_url('admin-ajax.php')) : "";

		$default = 'content' == $field ? '' : $class::$fields[$field]['default'] ;
		if(($value && !empty($value) && $value != $default)){
			$content =  $value ;
		} else {
			$content =  $editable ? '' : __('spot_field_info_missing', 'benedict') ;
			$empty = true;
		}

		echo sprintf("<span class='field%s%s' %s %s >", $editable ? ' editable' : '', $empty ? ' empty': '',  $data_type, $tag_properties);
		
		echo $content ; 

		echo "</span>" ;
		
	}

	function my_login_logo() { ?>
	<style>
		body.login div#login h1 a {
			width: 250px;
			height: 95px;
			margin: 0 auto;
			padding-bottom: 30px;
			background: url(<?php bloginfo( 'stylesheet_directory' ); ?>/images/viagemcultural.png) no-repeat;
			display: block;
		}
		body.login {
			background-image: -webkit-linear-gradient(-225deg, #efefef 0%, #c3deea 100%);
			background-image: linear-gradient(-45deg, #efefef 0%, #c3deea 100%);
			background-repeat: no-repeat;
		}
	</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );

	function my_login_logo_url_title() {
		return 'Your Site Name and Info';
	}
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
	function remove_footer_admin () {
	echo 'Desenvolvido por <a href="mailto:hello@memuller.com">Matheus Muller</a> (Back-end) e <a href="mailto:contato@thiagozucareli.com">Thiago Zucareli</a> (Interface/Front-end)';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');
?>
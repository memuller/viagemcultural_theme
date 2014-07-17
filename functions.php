<?php
require_once 'lib/enqueue.php';

add_image_size( 'trip_thumbnail', 940, 410, array( 'center', 'center' ));
add_image_size( 'tip_thumbnail', 300, 250, array( 'center', 'center' ));

	function get_the($field){
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
		$value = get_the($field);
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

?>
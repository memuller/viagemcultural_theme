<?php global $wp_query; 
	$term = $wp_query->get_queried_object();
	$terms = array($term);
	while($term->parent){
		$term = get_term_by('id', $term->parent, 'region');
		$terms[]= $term ;
	}
?>
<aside class="sidebar-archive grid_4 omega">
	<div>
		<h2>Buscar</h2>
		<form id='search' class="<?php echo $terms[sizeof($terms)-1]->slug == 'internacional' ? 'internacional' : 'nacional' ?>">
			<select class='region parent'>
				<option value=''>
					<?php echo $terms[sizeof($terms)-1]->slug == 'internacional' ? 'continente' : 'região' ?>
				</option>
				<?php foreach (get_terms('region', array('parent' => $terms[sizeof($terms)-1]->term_id, 'hide_empty' => false)) as $option) {
					printf("<option value='%s' %s>%s</option>", $option->slug, $selected, $option->name);	
				} ?>
			</select>
			<select class='region children'>
				<option value=''>
					<?php echo $terms[sizeof($terms)-1]->slug == 'internacional' ? 'país' : 'estado' ?>
				</option>
				<?php foreach (get_terms('region', array('parent' => $terms[sizeof($terms)-2]->term_id, 'hide_empty' => false)) as $option){
					printf("<option value='%s' %s>%s</option>", $option->slug, $selected, $option->name);
				} ?>
			</select>
			<input type="button" value="Buscar">
		</form>
	</div>
</aside>
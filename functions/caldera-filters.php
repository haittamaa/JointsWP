<?php
// Use Foundation's grid over the built in Bootstrap grid.
add_filter('caldera_forms_render_grid_settings', 'setup_foundation_grid', 10, 2);
function setup_foundation_grid($grid, $form){
	// Bootstrap grid sized to foundation equivilents
	$grid_sizes = array(
		'xs'	=>	'small',
		'sm'	=>	'small',
		'md'	=>	'medium',
		'lg'	=>	'large',
	);
	// set grid size to foundation size from sizes array
	$grid_size = $grid_sizes[ $form['settings']['responsive']['break_point'] ];
	// column_before = column start
	// %1$ sets the Column ID, %2$d Sets the span size, %3$d sets additional column classes
	$grid['column_before'] = '<div %1$s class="' . $grid_size . '-%2$d columns %3$s" style="min-height: 1px;">';
	// the min-height fixes an issue where an empty column doesn't show since foundation uses float:left
	
	return $grid;
}
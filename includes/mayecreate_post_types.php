<?php


// display the post id to the administration screens for posts.  This will make it easier to get the post id for use in shortcodes.

add_filter( 'manage_posts_columns', 'mayecreate_add_id_column', 5 );
add_action( 'manage_posts_custom_column', 'mayecreate_id_column_content', 5, 2 );

function mayecreate_add_id_column( $columns ) {
   $columns['mayecreate_id'] = 'ID';
   return $columns;
}
function mayecreate_id_column_content( $column, $id ) {
  if( 'mayecreate_id' == $column ) {
    echo $id;
  }
}

/* NOTE: These functions are functions that don't need to be in the parent theme because not every site will have them. */

function build_taxonomies() {
	register_taxonomy( 'projectcategory', 'menu', array( 'hierarchical' => true, 'label' => 'Project Categories', 'query_var' => true, 'rewrite' => true, 'show_in_rest' => true ) ); 
	register_taxonomy( 'resourcecategory', 'menu', array( 'hierarchical' => true, 'label' => 'Resource Categories', 'query_var' => true, 'rewrite' => true, 'show_in_rest' => true ) ); 
	register_taxonomy( 'eventcategory', 'menu', array( 'hierarchical' => true, 'label' => 'Event Categories', 'query_var' => true, 'rewrite' => true, 'show_in_rest' => true ) );
}
add_action( 'init', 'build_taxonomies', 0 );  

function mayecreate_create_post_type() {
		// Register the "Carousel Slides" custom post type if the custom post type slider is used.
		register_post_type( 'carousel_slides',
			array(
				'labels' => array(
					'name'              => __( 'Carousel Slides'),
					'singular_name'     => __( 'Carousel Slides' ),
					'add_new'           => __( 'Add Slide' ),
					'add_new_item'      => __( 'Add New Slide' ),
					'edit_item'         => __( 'Edit Slide' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => 'carousel_slides', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions'),
			'menu_icon'         => 'dashicons-images-alt',
			)
		);	
	$post_type_selector_project = get_field('post_type_selector_project', 'option');
	if ($post_type_selector_project == 'projects') {
		$alt_project_name = get_field('alternate_name_for_projects', 'option');
		if ($alt_project_name) { $alt_project_name = $alt_project_name; } else { $alt_project_name = "Projects"; }		
		$alt_project_slug = str_replace(' ', '-', strtolower($alt_project_name));
		// Register the "Project" custom post type if this is not needed, DELETE ME.
		register_post_type( 'mc-projects',
			array(
				'labels' => array(
					'name'              => __( $alt_project_name ),
					'singular_name'     => __( $alt_project_name ),
					'add_new'           => __( 'Add '.$alt_project_name.'' ),
					'add_new_item'      => __( 'Add New '.$alt_project_name.'' ),
					'edit_item'         => __( 'Edit '.$alt_project_name.'' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => ''.$alt_project_slug.'', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions','editor'),
			'menu_icon'         => 'dashicons-art',
			'taxonomies' => array('projectcategory'),
			'show_in_rest' => true,
			'has_archive' => true 
			)
		);
	}
	$post_type_selector_resource = get_field('post_type_selector_resource', 'option');
	if ($post_type_selector_resource == 'resources') {
		$alt_resources_name = get_field('alternate_name_for_resources', 'option');
		if ($alt_resources_name) { $alt_resources_name = $alt_resources_name; } else { $alt_resources_name = "Resources"; }
		$alt_resource_slug = str_replace(' ', '-', strtolower($alt_resources_name));
		// Register the "Resources" custom post type if this is not needed, DELETE ME.
		register_post_type( 'mc-resources',
			array(
				'labels' => array(
					'name'              => __( $alt_resources_name ),
					'singular_name'     => __( $alt_resources_name ),
					'add_new'           => __( 'Add '.$alt_resources_name.'' ),
					'add_new_item'      => __( 'Add New '.$alt_resources_name.'' ),
					'edit_item'         => __( 'Edit '.$alt_resources_name.'' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => ''.$alt_resource_slug .'', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions','editor'),
			'menu_icon'         => 'dashicons-format-aside',
			'taxonomies' => array('resourcecategory'),
			'show_in_rest' => true,
			'has_archive' => true 
			)
		);
	}
	$post_type_selector_events = get_field('post_type_selector_events', 'option');
	if ($post_type_selector_events == 'events') {
		$alt_events_name = get_field('alternate_name_for_events', 'option');
		if ($alt_events_name) { $alt_events_name = $alt_events_name; } else { $alt_events_name = "Events"; }
		$alt_events_slug = str_replace(' ', '-', strtolower($alt_events_name));
		// Register the "Events" custom post type if this is not needed, DELETE ME.
		register_post_type( 'mc-event',
			array(
				'labels' => array(
					'name'              => __( $alt_events_name ),
					'singular_name'     => __( $alt_events_name ),
					'add_new'           => __( 'Add '.$alt_events_name.'' ),
					'add_new_item'      => __( 'Add New '.$alt_events_name.'' ),
					'edit_item'         => __( 'Edit '.$alt_events_name.'' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => ''.$alt_events_slug .'', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions','editor'),
			'menu_icon'         => 'dashicons-calendar',
			'taxonomies' => array('eventcategory'),
			'show_in_rest' => true,
			'has_archive' => true 
			)
		);
	}
}
add_action( 'init', 'mayecreate_create_post_type' );



// Replace Featured Image Metabox with custom version for Carousel Slides Custom Post Type Edit Screens
add_action('do_meta_boxes', 'remove_thumbnail_box');
function remove_thumbnail_box() {
    
    remove_meta_box( 'postimagediv','carousel_slides','side' );
	add_meta_box('postimagediv', 'Carousel Slide Image', 'post_thumbnail_meta_box', 'carousel_slides', 'normal', 'high');

} 


add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	$post_type_selector = get_field('post_type_selector', 'option');
	if ($post_type_selector == "" || $post_type_selector == "no") {
		remove_menu_page( 'edit.php' );
	}
}

add_action( 'init', 'mc_change_post_object' );
// Change dashboard Posts to News
function mc_change_post_object() {
	$post_type_selector = get_field('post_type_selector', 'option');
	if ($post_type_selector == "news") {
		$alt_post_name = get_field('alternate_name_for_posts', 'option');
		if ($alt_post_name) { $alt_post_name = $alt_post_name; } else { $alt_post_name = "Post"; }
		$get_post_type = get_post_type_object('post');
		$labels = $get_post_type->labels;
		$labels->name = ''. $alt_post_name .'';
		$labels->singular_name = ''. $alt_post_name .'';
		$labels->add_new = 'Add '. $alt_post_name .'';
		$labels->add_new_item = 'Add '. $alt_post_name .'';
		$labels->edit_item = 'Edit '. $alt_post_name .''; 
		$labels->new_item = ''. $alt_post_name .'';
		$labels->view_item = 'View '. $alt_post_name .'';
		$labels->search_items = 'Search '. $alt_post_name .'';
		$labels->not_found = 'No '. $alt_post_name .' found';
		$labels->not_found_in_trash = 'No '. $alt_post_name .' found in Trash';
		$labels->all_items = 'All '. $alt_post_name .'';
		$labels->menu_name = ''. $alt_post_name .'';
		$labels->name_admin_bar = ''. $alt_post_name .'';
	}
}

<?php 

/**
 * Creates the functionality for custom blocks using Advanced Custom Fields Pro
 *
 */  

// THIS FUNCTION ALLOWS YOU TO SET THE COLOR SWATCHES IN THE COLOR PICKER ON THE PAGEBREAK BLOCK
function my_acf_collor_pallete_script() {
	
	$primary_site_color = (get_field('primary_site_color', 'option'));
	$secondary_color = (get_field('secondary_color', 'option'));
	$additional_theme_color_1 = (get_field('additional_theme_color_1', 'option'));
	$additional_theme_color_2 = (get_field('additional_theme_color_2', 'option'));
	$additional_theme_color_3 = (get_field('additional_theme_color_3', 'option'));
	$additional_theme_color_4 = (get_field('additional_theme_color_4', 'option'));
	if ($additional_theme_color_1) { $additional_theme_color_1 = $additional_theme_color_1; } else { $additional_theme_color_1 = "#fff"; }
	if ($additional_theme_color_2) { $additional_theme_color_2 = $additional_theme_color_2; } else { $additional_theme_color_2 = "#fff"; }
	if ($additional_theme_color_3) { $additional_theme_color_3 = $additional_theme_color_3; } else { $additional_theme_color_3 = "#fff"; }
	if ($additional_theme_color_4) { $additional_theme_color_4 = $additional_theme_color_4; } else { $additional_theme_color_4 = "#fff"; }
    ?>
    <script type="text/javascript">
    (function($){

        var primary_site_color = '<?php echo $primary_site_color; ?>';
        var secondary_color = '<?php echo $secondary_color; ?>';
        var additional_theme_color_1 = '<?php echo $additional_theme_color_1; ?>';
        var additional_theme_color_2 = '<?php echo $additional_theme_color_2; ?>';
        var additional_theme_color_3 = '<?php echo $additional_theme_color_3; ?>';
        var additional_theme_color_4 = '<?php echo $additional_theme_color_4; ?>';
        acf.add_filter('color_picker_args', function( args, $field ){
            // ADD THE HEX CODES FOR YOUR THEMES COLORS HERE
            args.palettes = ['#fff', '#eee', '#666', '#000', primary_site_color, secondary_color,additional_theme_color_1,additional_theme_color_2,additional_theme_color_3,additional_theme_color_4, '#f542e6']
            
            console.log(args);
            // return
            return args;
        });
        
    })(jQuery);
    </script>
    <?php
}

add_action('acf/input/admin_footer', 'my_acf_collor_pallete_script');


function register_acf_block_types() {
		
    // register a partial pagebreak block.
    acf_register_block_type(
		array(
			'name'              => 'pagebreak-start',
			'title'             => __('MC Page Break'),
			'description'       => __('Add a opening pagebreak block to your page. PLEASE NOTE: If this pagebreak is the last one on the page you DO NOT need the End Break block after. If this is not the last element on the page the you NEED to put the End Break block after.'),
			'render_template'   => 'blocks/pagebreak.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak' ),
		)
	);
	
    // register a endbreak block.
    acf_register_block_type(
		array(
			'name'              => 'endbreak',
			'title'             => __('MC End Break'),
			'description'       => __('Close a pagebreak block on your page.'),
			'render_template'   => 'blocks/endbreak.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak' ),
		)
	);
	
    // register a endcontainer block.
    acf_register_block_type(
		array(
			'name'              => 'endcontainer',
			'title'             => __('MC End Container'),
			'description'       => __('Close the container on your page.'),
			'render_template'   => 'blocks/endcontainer.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak', 'container' ),
		)
	);
	
    // register a startcontainer block.
    acf_register_block_type(
		array(
			'name'              => 'startcontainer',
			'title'             => __('MC Start Container'),
			'description'       => __('Re-Open the container on your page.'),
			'render_template'   => 'blocks/startcontainer.php',
			'category'          => 'formatting',
			'icon'              => 'editor-insertmore',
			'keywords'          => array( 'page', 'break', 'pagebreak', 'container' ),
		)
	);

    // register a button block.
    acf_register_block_type(
		array(
			'name'              => 'mc-button',
			'title'             => __('MC Button'),
			'description'       => __('Add a button to your page.'),
			'render_template'   => 'blocks/mc_button.php',
			'category'          => 'formatting',
			'icon'              => 'admin-links',
			'keywords'          => array( 'button' ),
		)
	);
	$post_type_selector = get_field('post_type_selector', 'option');
	if ($post_type_selector == 'news') {
		// register a featured posts block.
		acf_register_block_type(
			array(
				'name'              => 'featured-posts',
				'title'             => __('MC Featured Posts'),
				'description'       => __('Add a featured posts block to your page.'),
				'render_template'   => 'blocks/featured-posts.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'featured', 'posts', 'post' ),
			)
		);
		// register a posts page block.
		acf_register_block_type(
			array(
				'name'              => 'posts-page',
				'title'             => __('MC Posts Page'),
				'description'       => __('Add a posts page block to your page.'),
				'render_template'   => 'blocks/posts-page.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'page', 'posts', 'post' ),
			)
		);
	}  
	$post_type_selector_resource = get_field('post_type_selector_resource', 'option');
	if ($post_type_selector_resource == 'resources') {
		// register a featured resources block.
		acf_register_block_type(
			array(
				'name'              => 'featured-resources',
				'title'             => __('MC Featured Resources'),
				'description'       => __('Add a featured resources block to your page.'),
				'render_template'   => 'blocks/featured-resources.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'featured', 'resources', 'resource' ),
			)
		);
		// register a resources page block.
		acf_register_block_type(
			array(
				'name'              => 'resources-page',
				'title'             => __('MC Resources Page'),
				'description'       => __('Add a resources page block to your page.'),
				'render_template'   => 'blocks/resources-page.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'page', 'resources', 'resource' ),
			)
		);
	} 
	$post_type_selector_events = get_field('post_type_selector_events', 'option');
	if ($post_type_selector_events == 'events') {
		// register a featured events block.
		acf_register_block_type(
			array(
				'name'              => 'featured-events',
				'title'             => __('MC Featured Events'),
				'description'       => __('Add a featured events block to your page.'),
				'render_template'   => 'blocks/featured-events.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'featured', 'events', 'event' ),
			)
		);
		// register a events page block.
		acf_register_block_type(
			array(
				'name'              => 'events-page',
				'title'             => __('MC Events Page'),
				'description'       => __('Add a events page block to your page.'),
				'render_template'   => 'blocks/events-page.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'page', 'events', 'event' ),
			)
		);
	} 
	$post_type_selector_team = get_field('post_type_selector_team', 'option');
	if ($post_type_selector_team == 'team') {
		// register a team member block.
		acf_register_block_type(
			array(
				'name'              => 'mc-team',
				'title'             => __('MC Team'),
				'description'       => __('Add a team block to your page.'),
				'render_template'   => 'blocks/mc-team.php',
				'category'          => 'formatting',
				'icon'              => 'groups',
				'keywords'          => array( 'featured', 'team', 'teams', 'people' ),
			) 
		); 
	}  
	$post_type_selector_project = get_field('post_type_selector_project', 'option');
	if ($post_type_selector_project == 'projects') {
		// register a featured posts block.
		acf_register_block_type(
			array(
				'name'              => 'featured-projects',
				'title'             => __('MC Featured Projects'),
				'description'       => __('Add a featured projects block to your page.'),
				'render_template'   => 'blocks/featured-projects.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'featured', 'project' , 'projects' ),
			)
		);
		// register a posts page block.
		acf_register_block_type(
			array(
				'name'              => 'projects-page',
				'title'             => __('MC Projects Page'),
				'description'       => __('Add a projects page block to your page.'),
				'render_template'   => 'blocks/projects-page.php',
				'category'          => 'formatting',
				'icon'              => 'admin-post',
				'keywords'          => array( 'page', 'projects', 'project' ),
			)
		);
	}
}

// Check if function exists and hook into setup.
add_action('acf/init', 'register_acf_block_types');



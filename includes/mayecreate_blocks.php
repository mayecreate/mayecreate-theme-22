<?php 

/**
 * Creates the functionality for custom blocks using Advanced Custom Fields Pro
 *
 */  

// THIS FUNCTION ALLOWS YOU TO SET THE COLOR SWATCHES IN THE COLOR PICKER ON THE PAGEBREAK BLOCK
function my_acf_collor_pallete_script() {
	
	$primary_site_color = (get_field('primary_site_color', 'option'));
	$secondary_color = (get_field('secondary_color', 'option'));
    ?>
    <script type="text/javascript">
    (function($){

        var primary_site_color = '<?php echo $primary_site_color; ?>';
        var secondary_color = '<?php echo $secondary_color; ?>';
        acf.add_filter('color_picker_args', function( args, $field ){
            // ADD THE HEX CODES FOR YOUR THEMES COLORS HERE
            args.palettes = ['#fff', '#eee', '#666', '#000', primary_site_color, secondary_color, '#f542e6']
            
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
	if (in_array('news', get_field('post_type_selector', 'option'))) {
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
	if (in_array('resources', get_field('post_type_selector', 'option'))) {
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

	if (in_array('team', get_field('post_type_selector', 'option'))) {
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
	
	if (in_array('projects', get_field('post_type_selector', 'option'))) {
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



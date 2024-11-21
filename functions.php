<?php 
/**
 * Enqueues scripts and styles for front end.
 * 
 *	@since MayeCreate Mini Site 2.0
 * 	@return void
 */

function mayecreate_wp_bootstrap_scripts_styles() {
	
    // Loads Bootstrap minified JavaScript file.
	wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false ,'5.1', array('in_footer' => true,'strategy'  => 'async',));
	// Loads the LightSlider javascript for the featured image slider
	wp_enqueue_script('featuredSlider', get_template_directory_uri() . '/js/lightslider.js', array('jquery'),'1.0.0', array('in_footer' => true,'strategy'  => 'async',) );
	// Loads the MayeCreate custom scripts.
	wp_register_script('mayecreatejs', get_template_directory_uri() . '/js/mayecreate_scripts.js', array('jquery'), '1.0.0', array('in_footer' => true,'strategy'  => 'async',) );
	// Loads Javascript file for the  drawer menu
	wp_enqueue_script('drawerMenu', get_template_directory_uri() . '/js/jquery.mmenu.all.min.js', array('jquery'),'1.0.0', array('in_footer' => true,'strategy'  => 'async',) );
	// Loads Bootstrap minified CSS file.
	wp_enqueue_style('bootstrapwp', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', false ,'5.1');	
	// Loads the main stylesheet for the featured image slider
	wp_enqueue_style('featuredSliderStyle', get_template_directory_uri() . '/css/lightslider.min.css', array('bootstrapwp') ,'1.0');
	// Loads the stylesheet for the slideout menu.
	wp_enqueue_style('drawerMenuStyle', get_template_directory_uri() . '/css/jquery.mmenu.all.css', array('bootstrapwp') ,'1.0');
	// Loads the additional stylesheet for the slideout menu for shadow
	wp_enqueue_style('drawerMenuShadow', get_template_directory_uri() . '/css/jquery.mmenu.pageshadow.css', array('bootstrapwp') ,'1.0');
	// Loads the additional stylesheet for the slideout menu left / right drawer positioning
	wp_enqueue_style('drawerMenuPosition', get_template_directory_uri() . '/css/jquery.mmenu.positioning.css', array('bootstrapwp') ,'1.0');		
	// Loads our main stylesheet.
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('bootstrapwp') ,'1.0');
	wp_register_style('style_compiled', get_template_directory_uri() . '/css/main.min.css', array('bootstrapwp') ,'1.0');

	wp_enqueue_style('style');
	wp_enqueue_style('style_compiled');
	wp_enqueue_script('mayecreatejs');
     
	  
}
add_action('wp_enqueue_scripts', 'mayecreate_wp_bootstrap_scripts_styles');
 

/* Instantiates the blog title block */
include get_theme_file_path('includes/mayecreate_logo.php');

/* Instantiates the walker class for the bootstrap menus */
include get_theme_file_path('includes/mayecreate_nav.php');

/* Instantiates the menu areas in theme */
include get_theme_file_path('includes/mayecreate_menus.php');

/* Adds Breadcrub Navigation for sites */
include get_theme_file_path('includes/mayecreate_breadcrumb_nav.php');

/* Instantiates the page title block */
include get_theme_file_path('includes/mayecreate_page_title.php');

/* Instantiates the custom post types */
include get_theme_file_path('includes/mayecreate_post_types.php');

/* Instantiates the facebook opengraph code to be used in the head of the theme if turned on*/
include get_theme_file_path('includes/mayecreate_facebook_opengraph.php');

/* Gets the slug of a post to be used in loops */
include get_theme_file_path('includes/mayecreate_slugs.php');

/* Adjusts excerpt display properties */
include get_theme_file_path('includes/mayecreate_excerpts.php');

/* White labels the theme login */
include get_theme_file_path('includes/mayecreate_theme_white_label.php');

/* Instantiates the post thumbnails and custom post image sizes */
include get_theme_file_path('includes/mayecreate_custom_post_thumbnails.php');
 
/* Adds Theme Support for HTML5 Search Form */
add_theme_support('html5', array('search-form'));

/* Adds Mayecreate Custom Blocks to Theme */
include get_theme_file_path('includes/mayecreate_blocks.php');

/* Removes responsive image functionality from site.  Will possibly remove after Wordpress 4.5 */
include get_theme_file_path('includes/mayecreate_modify_capabilities.php');

/* Locks down the wp rest api to only show the users and posts api results to logged in users */
include get_theme_file_path('includes/mayecreate_rest_api.php');

/* Custom code to set events to draft automatically after event date. */
include get_theme_file_path('includes/mayecreate_event_draft.php');

/*
==========================================================
Removing things in admin section that only mayecreate should have access to
==========================================================
*/
$user_id = get_current_user_id();
if ($user_id == '1') {} else { //User_id 1 is MayeCreate
define( 'DISALLOW_FILE_EDIT', true );
}

/*
==========================================================
Removing deactivate link in plugins for ACF
==========================================================
*/
add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 4 );
function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context ) {
 
    if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, array(
        'advanced-custom-fields-pro/acf.php'
    )))
        unset( $actions['deactivate'] );
    return $actions;
}

/*
==========================================================
Loads the custom styles from the Theme Customizer
==========================================================
*/
function mayecreate_theme_customize_css(){
	include_once( get_template_directory() . '/includes/custom-style.php' );
}
add_action( 'wp_head', 'mayecreate_theme_customize_css');
add_action( 'admin_head', 'mayecreate_theme_customize_css');


function containerWidth() {
	global $containerWidth;
    if(is_front_page()) { 
		$containerWidth ='container container-home';
	} else { 
		$containerWidth ='container';  
	}
}
add_action( 'get_header', 'containerWidth' );

/*
==========================================================
* META DESCRIPTIONS
==========================================================
*/

add_action( 'wp_head', 'prefix_meta_desc' );
function prefix_meta_desc() {
    if ( ! is_singular() )
        return;

    $meta = strip_tags( get_post()->post_content );
    $meta = str_replace( array( "\\n", "\\r", "\\t" ), ' ', $meta);
    $meta = substr( $meta, 0, 155 );

    echo '<meta name="description" content="' . $meta . '">';
}


/*
==========================================================
* SECURITY TWEEKS
* 
* Filter hides the WP version from the website head.  Making 
* it harder for hackers to determine what version of wordpress the site is built with.
==========================================================
*/

remove_action('wp_head', 'wp_generator');

/**
 * Enqueue block editor JavaScript and CSS
*/

function jsforwpblocks_editor_scripts() {
	
  // Make paths variables so we don't write em twice
	
  $blockPath = '/js/mayecreate_scripts.js';
  //$editorStylePath = '/style.css'; 
  // Enqueue the bundled block JS file
  wp_enqueue_script( 'mc-block-editor-script', get_template_directory_uri() . '/js/mayecreate_scripts.js', false, '1.0', 'all' );

}
// Hook scripts function into block editor hook
add_action( 'enqueue_block_editor_assets', 'jsforwpblocks_editor_scripts' );


function editor_style_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
	add_editor_style( '/css/main.min.css' );
}
add_action( 'after_setup_theme', 'editor_style_setup' );

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

add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Grey', 'mayecreate-theme' ), //Name: visible to user
		'slug'  => 'grey', //Slug: used in CSS class
		'color'	=> '#aaa', //Color: used for rendering elements in the Gutenberg block editor
	),
	array(
		'name'  => __( 'Dark Grey', 'mayecreate-theme' ),
		'slug'  => 'darkgrey',
		'color' => '#666',
	),
	array(
		'name'  => __( 'Black', 'mayecreate-theme' ),
		'slug'  => 'black',
		'color' => '#000',
	),
	array(
		'name'	=> __( 'White', 'mayecreate-theme' ),
		'slug'	=> 'white',
		'color'	=> '#fff',
	),
	array(
		'name'	=> __( 'Primary Site Color', 'mayecreate-theme' ),
		'slug'	=> 'primary',
		'color'	=> $primary_site_color,
	),
	array(
		'name'	=> __( 'Secondary Site Color', 'mayecreate-theme' ),
		'slug'	=> 'secondary',
		'color'	=> $secondary_color,
	),
	array(
		'name'	=> __( 'Additional Theme Color 1', 'mayecreate-theme' ),
		'slug'	=> 'theme-color-1',
		'color'	=> $additional_theme_color_1,
	),
	array(
		'name'	=> __( 'Additional Theme Color 2', 'mayecreate-theme' ),
		'slug'	=> 'theme-color-2',
		'color'	=> $additional_theme_color_2,
	),
	array(
		'name'	=> __( 'Additional Theme Color 3', 'mayecreate-theme' ),
		'slug'	=> 'theme-color-3',
		'color'	=> $additional_theme_color_3,
	),
	array(
		'name'	=> __( 'Additional Theme Color 4', 'mayecreate-theme' ),
		'slug'	=> 'theme-color-4',
		'color'	=> $additional_theme_color_4,
	),
	array(
		'name'	=> __( 'Hot Pink Error', 'mayecreate-theme' ),
		'slug'	=> 'hotpink',
		'color'	=> '#f542e6',
	)
) );

add_theme_support( 'disable-custom-colors' );


/* Automatically set the image Title, Alt-Text, Caption & Description upon upload
--------------------------------------------------------------------------------------*/
add_action( 'add_attachment', 'mayecreate_set_image_meta_upon_image_upload' );
function mayecreate_set_image_meta_upon_image_upload( $post_ID ) {

	// Check if uploaded file is an image, else do nothing

	if ( wp_attachment_is_image( $post_ID ) ) {

		$my_image_title = get_post( $post_ID )->post_title;

		// Sanitize the title:  remove hyphens, underscores & extra spaces:
		$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );

		// Sanitize the title:  capitalize first letter of every word (other letters lower case):
		$my_image_title = ucwords( strtolower( $my_image_title ) );

		// Create an array with the image meta (Title, Caption, Description) to be updated
		// Note:  comment out the Excerpt/Caption or Content/Description lines if not needed
		$my_image_meta = array(
			'ID'		=> $post_ID,			// Specify the image (ID) to be updated
			'post_title'	=> $my_image_title,		// Set image Title to sanitized title
			//'post_excerpt'	=> $my_image_title,		// Set image Caption (Excerpt) to sanitized title
			'post_content'	=> $my_image_title,		// Set image Description (Content) to sanitized title
		);

		// Set the image Alt-Text
		update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title );

		// Set the image meta (e.g. Title, Excerpt, Content)
		wp_update_post( $my_image_meta );

	} 
}

/*
Change the default image settings
*/
add_action( 'after_setup_theme', 'wnd_default_image_settings' );
function wnd_default_image_settings() {
	update_option( 'image_default_align', 'center' );
	update_option( 'image_default_link_type', 'none' );
	update_option( 'image_default_size', 'large' );
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
        'capability' => 'manage_options',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
        'capability' => 'manage_options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Slider Settings',
		'menu_title'	=> 'Carousel Slider',
		'parent_slug'	=> 'theme-general-settings',
        'capability' => 'manage_options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
        'capability' => 'manage_options',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Post Settings', 
		'menu_title'	=> 'Post Types',
		'parent_slug'	=> 'theme-general-settings',
        'capability' => 'manage_options',
	));
	
}

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/*
 * Add template class to admin body based on current page's template.
 */
function mc_theme_add_template_class($classes)
{
    $template = get_page_template_slug();
    if ($template) {
        $class = preg_replace('/\.php$/', '', $template);
        $classes .= ' template-' . sanitize_html_class($class);
    }
    return $classes;
}
add_filter('admin_body_class', 'mc_theme_add_template_class');


function mc_load_more() {
	$news_options = get_field('news_options', 'option');
	if($news_options) {

		$post_category = $news_options['post_page_block_category'];
		$number_of_posts = $news_options['post_page_block_number_of_posts'];

	}
	if ($number_of_posts) {
		$number_of_posts = $number_of_posts;
	} else {
		$number_of_posts = "-1";
	}
	if ($post_category) { 
		$post_category = $post_category;
	} else {
		$post_category = "";
	}
	
	$ajaxposts = new WP_Query([
	  'post_type' => 'post',
	  'posts_per_page' => $number_of_posts,
	  'post_status' => 'publish',
	  'order'	=> 'DESC', 
	  'orderby' => 'date',
	  'cat' => $post_category,
	  'paged' => $_POST['paged'],
	]);
  
	$response = '';
	$max_pages = $ajaxposts->max_num_pages;
  
	if($ajaxposts->have_posts()) {
		ob_start();
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= get_template_part('partials/loop','blog-page');
	  endwhile;
	  $output = ob_get_contents();
	  ob_end_clean();
	} else {
	  $response = '';
	}
	$result = [
		'max' => $max_pages,
		'html' => $output,
	];
	
	echo json_encode($result);
	exit;
}
add_action('wp_ajax_mc_load_more', 'mc_load_more');
add_action('wp_ajax_nopriv_mc_load_more', 'mc_load_more');

  
function mc_load_more_project() {
$projects_options = get_field('projects_options', 'option');
if($projects_options) {

	$post_category_project = $projects_options['post_page_block_category'];
	$number_of_posts_project = $projects_options['post_page_block_number_of_posts'];

}
if ($number_of_posts_project) {
	$number_of_posts_project = $number_of_posts_project;
} else {
	$number_of_posts_project = "-1";
}
if ($post_category_project) { 
	$post_category_project = $post_category_project;
	$taxonomy_project = 'taxonomy';
	$projectcategory_project = 'projectcategory';
	$field_project = 'field';
	$ID_project = 'ID';
	$terms_project = 'terms';
} else {
	$post_category_project = "";
	$taxonomy_project = '';
	$projectcategory_project = '';
	$field_project = '';
	$ID_project = '';
	$terms_project = '';
}

$ajaxposts_project = new WP_Query([
	'post_type' => 'mc-projects',
	'posts_per_page' => $number_of_posts_project,
	'post_status' => 'publish',
	'order'	=> 'DESC',
	'orderby' => 'date',
	'paged' => $_POST['paged'],
	'tax_query' => array(
		'relation' => 'OR',
			array (
				$taxonomy_project  => $projectcategory_project,
				$field_project     => $ID_project,
				$terms_project     => $post_category_project
			)
		)
]);

$response_project = '';
$max_pages_project = $ajaxposts_project->max_num_pages;

if($ajaxposts_project->have_posts()) {
	ob_start();
	while($ajaxposts_project->have_posts()) : $ajaxposts_project->the_post();
	$response_project .= get_template_part('partials/loop','project-page');
	endwhile;
	$output_project = ob_get_contents();
	ob_end_clean();
} else {
	$response_project = '';
}
$result_project = [
	'max' => $max_pages_project,
	'html' => $output_project,
];

echo json_encode($result_project);
exit;
}
add_action('wp_ajax_mc_load_more_project', 'mc_load_more_project'); 
add_action('wp_ajax_nopriv_mc_load_more_project', 'mc_load_more_project');

  
function mc_load_more_resource() {
$resource_options = get_field('resource_options', 'option');
if($resource_options) {

	$post_category_resource = $resource_options['post_page_block_category'];
	$number_of_posts_resource = $resource_options['post_page_block_number_of_posts'];

}
if ($number_of_posts_resource) {
	$number_of_posts_resource = $number_of_posts_resource;
} else {
	$number_of_posts_resource = "-1";
}
if ($post_category_resource) { 
	$post_category_resource = $post_category_resource;
	$taxonomy_resource = 'taxonomy';
	$resourcecategory_resource = 'resourcecategory';
	$field_resource = 'field';
	$ID_resource = 'ID';
	$terms_resource = 'terms';
} else {
	$post_category_resource = "";
	$taxonomy_resource = '';
	$resourcecategory_resource = '';
	$field_resource = '';
	$ID_resource = '';
	$terms_resource = '';
}

$ajaxposts_resource = new WP_Query([
	'post_type' => 'mc-resources',
	'posts_per_page' => $number_of_posts_resource,
	'post_status' => 'publish',
	'order'	=> 'DESC',
	'orderby' => 'date',
	'paged' => $_POST['paged'],
	'tax_query' => array(
		'relation' => 'OR',
			array (
				$taxonomy_resource  => $resourcecategory_resource,
				$field_resource     => $ID_resource,
				$terms_resource     => $post_category_resource
			)
		)
]);

$response_resource = '';
$max_pages_resource = $ajaxposts_resource->max_num_pages;

if($ajaxposts_resource->have_posts()) {
	ob_start();
	while($ajaxposts_resource->have_posts()) : $ajaxposts_resource->the_post();
	$response_resource .= get_template_part('partials/loop','resource-page');
	endwhile;
	$output_resource = ob_get_contents();
	ob_end_clean();
} else {
	$response_resource = '';
}
$result_resource = [
	'max' => $max_pages_resource,
	'html' => $output_resource,
];

echo json_encode($result_resource);
exit;
}
add_action('wp_ajax_mc_load_more_resource', 'mc_load_more_resource'); 
add_action('wp_ajax_nopriv_mc_load_more_resource', 'mc_load_more_resource');

  
function mc_load_more_event() {
	$event_options = get_field('event_options', 'option');
	if($event_options) {
	
		$post_category_event = $event_options['post_page_block_category'];
		$number_of_posts_event = $event_options['post_page_block_number_of_posts'];
	
	}
	if ($number_of_posts_event) {
		$number_of_posts_event = $number_of_posts_event;
	} else {
		$number_of_posts_event = "-1";
	}
	if ($post_category_event) { 
		$post_category_event = $post_category_event;
		$taxonomy_event = 'taxonomy';
		$eventcategory_event = 'eventcategory';
		$field_event = 'field';
		$ID_event = 'ID';
		$terms_event = 'terms';
	} else {
		$post_category_event = "";
		$taxonomy_event = '';
		$eventcategory_event = '';
		$field_event = '';
		$ID_event = '';
		$terms_event = '';
	}
	
	$ajaxposts_event = new WP_Query([
		'post_type' => 'mc-event',
		'posts_per_page' => $number_of_posts_event,
		'post_status' => 'publish',
		'orderby' => 'meta_value_num',
		'meta_key'	=> 'event_start_date',
		'order'	=> 'ASC',
		'paged' => $_POST['paged'],
		'tax_query' => array(
			'relation' => 'OR',
				array (
					$taxonomy_event  => $eventcategory_event,
					$field_event     => $ID_event,
					$terms_event     => $post_category_event
				)
			)
	]);
	
	$response_event = '';
	$max_pages_event = $ajaxposts_event->max_num_pages;
	
	if($ajaxposts_event->have_posts()) {
		ob_start();
		while($ajaxposts_event->have_posts()) : $ajaxposts_event->the_post();
		$response_event .= get_template_part('partials/loop','event-page');
		endwhile;
		$output_event = ob_get_contents();
		ob_end_clean();
	} else {
		$response_event = '';
	}
	$result_event = [
		'max' => $max_pages_event,
		'html' => $output_event,
	];
	
	echo json_encode($result_event);
	exit;
	}
	add_action('wp_ajax_mc_load_more_event', 'mc_load_more_event'); 
	add_action('wp_ajax_nopriv_mc_load_more_event', 'mc_load_more_event');

function mc_optional_nav_overlap() {
$navigation_overlapping_the_content = get_field('navigation_overlapping_the_content','option');

if ($navigation_overlapping_the_content == 'no') { ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) { 
		//initial page load
		$("#contentwrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')});
		$("#homeContentWrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')}); 
		//recalculate on scroll
		$(window).scroll(function() {
			setTimeout(function() {
				if($(this).scrollTop() >= 175){} else {
					$("#contentwrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')});
					$("#homeContentWrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')});
				}     
			}, 50); 
		});
		//recalculate on screen re-size
		$(window).resize(function() {
			$("#contentwrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')});	
			$("#homeContentWrap").css({'padding-top':($("#navigation.fixed").outerHeight()+'px')});
		}).resize();
	});
	</script>
<?php }
}
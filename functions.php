<?php 
/**
 * Enqueues scripts and styles for front end.
 * 
 *	@since MayeCreate Mini Site 2.0
 * 	@return void
 */

function mayecreate_wp_bootstrap_scripts_styles() {
	
    // Loads Bootstrap minified JavaScript file.
	wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', false ,'5.1', true );
	// Loads the LightSlider javascript for the featured image slider
	wp_enqueue_script('featuredSlider', get_template_directory_uri() . '/js/lightslider.js', array('jquery'),'1.0.0', true );
	// Loads the MayeCreate custom scripts.
	wp_register_script('mayecreatejs', get_template_directory_uri() . '/js/mayecreate_scripts.js', array('jquery'), '1.0.0', true );
	// Loads Javascript file for the  drawer menu
	wp_enqueue_script('drawerMenu', get_template_directory_uri() . '/js/jquery.mmenu.all.min.js', array('jquery'),'1.0.0', true );
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
Loads the custom styles from the Theme Customizer
==========================================================
*/
function mayecreate_theme_customize_css(){
	include_once( get_template_directory() . '/includes/custom-style.php' );
}
add_action( 'wp_head', 'mayecreate_theme_customize_css');
add_action( 'admin_head', 'mayecreate_theme_customize_css');


	$containerWidth = ('narrow' == get_field('container_width', 'option'));
	if($containerWidth) { 
		$containerWidth ='container container-narrow';
	} else { 
		$containerWidth ='container';
	}

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
		'menu_title'	=> 'General Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Slider Settings',
		'menu_title'	=> 'Carousel Slider',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
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
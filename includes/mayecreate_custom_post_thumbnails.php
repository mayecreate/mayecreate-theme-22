<?php 
/*
 * Instantiates the post thumbnails and custom post image sizes 
 * @return void
 *
 */

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true ); // default Post Thumbnail dimensions (cropped)
}


//Activates Custom Featured Image Sizes
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	$team_options = get_field('team_options', 'option');
	if($team_options) {
		$image_max_width = $team_options['image_max_width'];
	}
	if ($image_max_width) { $image_size = $image_max_width; } else { $image_size = "300"; }
	$news_options = get_field('news_options', 'option');
	if($news_options) {
		$featured_image_width = $news_options['featured_image_width'];
		$featured_image_height = $news_options['featured_image_height'];
	}
	if ($featured_image_width) { $featured_image_width = $featured_image_width; } else { $featured_image_width = "700"; }
	if ($featured_image_height) { $featured_image_height = $featured_image_height; } else { $featured_image_height = "350"; }
	$projects_options = get_field('projects_options', 'option');
	if($projects_options) {
		$project_featured_image_width = $projects_options['featured_image_width'];
		$project_featured_image_height = $projects_options['featured_image_height'];
	}
	if ($project_featured_image_width) { $project_featured_image_width = $project_featured_image_width; } else { $project_featured_image_width = $featured_image_width; }
	if ($project_featured_image_height) { $project_featured_image_height = $project_featured_image_height; } else { $project_featured_image_height = $featured_image_height; }
	$resource_options = get_field('resource_options', 'option');
	if($resource_options) {
		$resource_featured_image_width = $resource_options['featured_image_width'];
		$resource_featured_image_height = $resource_options['featured_image_height'];
	}
	if ($resource_featured_image_width) { $resource_featured_image_width = $resource_featured_image_width; } else { $resource_featured_image_width = $featured_image_width; }
	if ($resource_featured_image_height) { $resource_featured_image_height = $resource_featured_image_height; } else { $resource_featured_image_height = $featured_image_height; }
	$event_options = get_field('event_options', 'option');
	if($event_options) {
		$event_featured_image_width = $event_options['featured_image_width'];
		$event_featured_image_height = $event_options['featured_image_height'];
	}
	if ($event_featured_image_width) { $event_featured_image_width = $event_featured_image_width; } else { $event_featured_image_width = $featured_image_width; }
	if ($event_featured_image_height) { $event_featured_image_height = $event_featured_image_height; } else { $event_featured_image_height = $featured_image_height; }

	$pagebreak_image_width = (get_field('pagebreak_image_width', 'option'));
	$pagebreak_image_height = (get_field('pagebreak_image_height', 'option'));
	if ($pagebreak_image_width) { $pagebreak_image_width = $pagebreak_image_width; } else { $pagebreak_image_width = "1920"; }
	if ($pagebreak_image_height) { $pagebreak_image_height = $pagebreak_image_height; } else { $pagebreak_image_height = "750"; }

    add_image_size('blog', $featured_image_width, $featured_image_height, true); // (cropped)
	add_image_size('team', $image_size, $image_size, array('center','top')); // (cropped)
    add_image_size('project', $project_featured_image_width, $project_featured_image_height, true); // (cropped)
    add_image_size('resource', $resource_featured_image_width, $resource_featured_image_height, true); // (cropped)
    add_image_size('event', $event_featured_image_width, $event_featured_image_height, true); // (cropped)
	add_image_size('pbimage', $pagebreak_image_width, $pagebreak_image_height, true); // (cropped)
	add_image_size('schmedium', 600, 600); // (cropped)
	add_image_size('slider', 1920, 750, true); // (cropped)
	add_image_size('header', 1920, 450, true); // (cropped)
    add_image_size('mailchimp',564, 280, true); // (cropped)
	//add_image_size('featuredItemSlider', 175, 175, true); // (cropped)  Remeber to uncomment the corisponding line it the funtion below
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
	$addsizes = array(
	'blog' 					=> __( "Blog"),
	'blog-card' 			=> __( "Blog Card"),
	'slider' 				=> __( "Slider")
	//'featuredItemSlider' 	=> __( "Featured Item Slider")
);
$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
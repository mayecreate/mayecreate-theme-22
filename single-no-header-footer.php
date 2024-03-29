<?php
/*
 * Template Name: No Header or Footer
 * Template Post Type: post
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<?php 

/**
 * ==========================================================
 * MayeCreate Title
 * ==========================================================
 */

	echo '<title>';
	
	/* Print the <title> tag based on what is being viewed. */
	global $page, $paged;
	
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skematik' ), max( $paged, $page ) );
	
	echo '</title>';
?>

<?php mayecreate_facebook_opengraph(); ?>	


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Fonts -->
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/539078998e.js" crossorigin="anonymous"></script>

<?php $google_font_embed_links = (get_field('google_font_embed_links', 'option')); ?>
<?php if ($google_font_embed_links) {
	echo $google_font_embed_links;
} else {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">';
} ?>

<?php wp_head(); ?>
    
<?php $ga_tag = (get_field('ga_tag', 'option')); ?>
<?php if ($google_font_embed_links) {
echo $ga_tag;
} ?>  
    

<div id="skip"><a href="#content">Skip to Main Content</a></div>

</head>



<?php global $containerWidth; ?> 

<body <?php body_class(); ?>>
<?php $default_header_image = get_field('default_header_image', 'option'); ?>
<?php if ($default_header_image) {
	$default_header_image = $default_header_image;
} else {
	$default_header_image = get_bloginfo('url') .'/wp-content/themes/mayecreate-theme-22/img/default_header.jpg';
} ?>
<?php if (is_home()) { ?>
        <div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $default_header_image; ?>')">
            <div class="container">
                <?php mayecreate_page_title();?>
			  	<h2 class="sr-only sr-only-focusable">The header image is the default header image for the site.</h2>
            </div>
        </div>
<?php } elseif (is_404()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $default_header_image; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 page-header">
                                <h1 class="entry-title">ERROR 404</h1>
                            </div>
                        </div>
                    </div>
                </div>
			  	<h2 class="sr-only sr-only-focusable">The header image is the default header image for the site.</h2>
            </div>
        </div>
<?php } elseif (is_search()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $default_header_image; ?>')">
            <div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1 class="entry-title">Search Results for: <span><?php  echo get_search_query(); ?></span></h1>
					</div>
				</div>
			  	<h2 class="sr-only sr-only-focusable">The header image is the default header image for the site.</h2>
			</div>
		</div>
<?php } elseif (is_archive()) { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $default_header_image; ?>')">
            <div class="container">
				<div class="row">
					<div class="col-md-12 page-header">
						<h1 class="entry-title">
							<?php						
								if (taxonomy_exists('wpsc_product_category')){
									_e( 'Products in the', 'skematik' );

								} elseif ( is_category() ) {
									printf( __( '%s', 'skematik' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								} elseif ( is_tag() ) {
									printf( __( 'Tag Archives: %s', 'skematik' ), '<span>' . single_tag_title( '', false ) . '</span>' );

								} elseif ( is_author() ) {
									/* Queue the first post, that way we know
									* what author we're dealing with (if that is the case).
									*/
									the_post();
									printf( __( 'Author Archives: %s', 'skematik' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
									/* Since we called the_post() above, we need to
									* rewind the loop back to the beginning that way
									* we can run the loop properly, in full.
									*/
									rewind_posts();

								} elseif ( is_day() ) {
									printf( __( 'Daily Archives: %s', 'skematik' ), '<span>' . get_the_date() . '</span>' );

								} elseif ( is_month() ) {
									printf( __( 'Monthly Archives: %s', 'skematik' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

								} elseif ( is_year() ) {
									printf( __( 'Yearly Archives: %s', 'skematik' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

								} elseif (taxonomy_exists('wpsc_product_category')){
									_e( 'Products in the', 'skematik' );

								} else {
									printf( __( '%s', 'skematik' ), '<span>' . single_cat_title( '', false ) . '</span>' );

								}
								?>
						</h1>
					</div>
				</div>
			  	<h2 class="sr-only sr-only-focusable">The header image is the default header image for the site.</h2>
			</div>
		</div>	
<?php } else { ?>
	
	<?php if (has_post_thumbnail() ) { ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'head' ); ?>
	<?php $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
	<?php if ($image_alt) { $image_alt = $image_alt; } else { $image_alt = "No alt tag provided"; } ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $image[0]; ?>')">
            <div class="container">
              <?php mayecreate_page_title();?>
			  <h2 class="sr-only sr-only-focusable">Header image for this page is an image of: <?php echo $image_alt; ?></h2>
            </div>
        </div>
	<?php } else { ?>
		<div class="pagehead" id="internalfeatured" style=" max-height: 600px; background-image: url('<?php echo $default_header_image; ?>')">
            <div class="container">
                <?php mayecreate_page_title();?>
			  	<h2 class="sr-only sr-only-focusable">The header image is the default header image for the site.</h2>
            </div>
        </div>
    <?php } ?>
           
<?php } ?>
<div class="pagebreak_fix">
    <div class="hfeed site container">   
		<div class="row">
		    <?php get_template_part('partials/loop','standard'); ?>
		</div>
	</div><!-- / hfeed site container -->
</div><!-- / page -->
<?php wp_footer(); ?>

<?php mayecreate_DBD(); ?>
</body>
</html>
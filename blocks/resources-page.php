<?php
$resource_options = get_field('resource_options', 'option');
if($resource_options) { ?>

        <?php $post_category = $resource_options['post_page_block_category']; ?>
        <?php $number_of_posts = $resource_options['post_page_block_number_of_posts']; ?>

<?php } ?>
<?php $optional_title = esc_html(get_field("optional_title")); ?>
<?php $load_more_text = esc_html(get_field("load_more_text")); ?>
<?php $load_more_button_alignment = esc_html(get_field("load_more_button_alignment")); ?>
<?php if ($number_of_posts) {
    $number_of_posts = $number_of_posts;
} else {
    $number_of_posts = "-1";
} ?>
<?php if ($post_category) { 
	$post_category = $post_category;
	$taxonomy = 'taxonomy';
	$resourcecategory = 'resourcecategory';
	$field = 'field';
	$ID = 'ID';
	$terms = 'terms';
} else {
	$post_category = "";
	$taxonomy = '';
	$resourcecategory = '';
	$field = '';
	$ID = '';
	$terms = '';
} ?>
<?php if ($load_more_text) { 
	$load_more_text = $load_more_text;
} else {
	$load_more_text = "Learn More";
} ?>
<?php if ($load_more_button_alignment == "Left") { 
	$load_more_button_alignment = "";
} elseif ($load_more_button_alignment == "Right") {
	$load_more_button_alignment = "pullright";
} elseif ($load_more_button_alignment == "Center") {
	$load_more_button_alignment = "center";
} else { 
	$load_more_button_alignment = "";
 } ?>
<?php if ($optional_title) { ?>
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo $optional_title; ?></h2>
		</div>
	</div>
<?php } ?>

	<div class="row justify-content-center resource-list">
		<?php // args
		$args = array(
		'posts_per_page'	=> $number_of_posts,
		'post_status' => 'publish',
		'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
		'orderby' => 'date',
		'post_type' => 'mc-resources',
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
				array (
					$taxonomy  => $resourcecategory,
					$field     => $ID,
					$terms     => $post_category
				)
			)
		); ?>

		<?php // query
		$wp_query = new WP_Query( $args );

		// loop
		while( $wp_query->have_posts() )
		{
		$wp_query->the_post();

		?>
            <?php get_template_part('partials/loop','resource-page'); ?>
		<?php } // end the loop ?>
		<!--Reset Query-->
		<?php wp_reset_query();?>
	</div>
    
<?php if ($number_of_posts) { ?>
	<div id="$"></span>
	<div class="row">
		<div class="col-md-12">
			<a href="#$" class="btn-mayecreate <?php echo $load_more_button_alignment; ?>" id="load-more-resource"><?php echo $load_more_text; ?></a>
		</div>
    </div>
<?php } ?>
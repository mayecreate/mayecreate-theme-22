<?php global $paged; ?>
<?php $optional_title = esc_html(get_field("optional_title")); ?>
<?php $post_category = esc_html(get_field("post_category")); ?>
<?php $number_of_posts_to_show = esc_html(get_field("number_of_posts_to_show")); ?>
<?php $optional_button_link = esc_html(get_field("optional_button_link")); ?>
<?php $optional_button_link_text = esc_html(get_field("optional_button_link_text")); ?>
<?php $load_more_button_alignment = esc_html(get_field("optional_button_alignment")); ?>
<?php if ($optional_button_link_text) { 
	$optional_button_link_text = $optional_button_link_text;
} else {
	$optional_button_link_text = "View More";
} ?>
<?php if ($post_category) { 
	$post_category = $post_category;
	$taxonomy = 'taxonomy';
	$eventcategory = 'eventcategory';
	$field = 'field';
	$ID = 'ID';
	$terms = 'terms';
} else {
	$post_category = "";
	$taxonomy = '';
	$eventcategory = '';
	$field = '';
	$ID = '';
	$terms = '';
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

	<?php if ('one' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-12";
	} elseif ('two' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6";
	} elseif ('three' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6 col-lg-4";
	} elseif ('four' == get_field('number_of_columns')) {
		$bootstrap_columns = "col-md-6 col-lg-3";
	} ?>
	<div class="row justify-content-center">
		<?php // args
		$args = array(
		'posts_per_page'	=> $number_of_posts_to_show,
		'orderby' => 'meta_value_num',
		'meta_key'	=> 'event_start_date',
		'order'	=> 'ASC',
		'post_type' => 'mc-event',
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
				array (
					$taxonomy  => $eventcategory,
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
			<div class="<?php echo $bootstrap_columns; ?>">
				<?php get_template_part('partials/loop','event'); ?>
			</div>
		<?php } // end the loop ?>
		<!--Reset Query-->
		<?php wp_reset_query();?>
	</div>
<?php if (is_admin()) { ?>
	<?php if ($optional_button_link) { ?>
		<span class="btn-mayecreate"><?php echo $optional_button_link_text; ?></span>
	<?php } ?>
<?php } else { ?>	
	<?php if ($optional_button_link) { ?>
		<div class="row">
			<div class="col-md-12">
				<a class="btn-mayecreate <?php echo $load_more_button_alignment; ?>" href="<?php echo $optional_button_link; ?>"><?php echo $optional_button_link_text; ?></a>
			</div>
		</div>
	<?php } ?>
<?php } ?>
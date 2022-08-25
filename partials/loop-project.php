<?php
$projects_options = get_field('projects_options', 'option');
if($projects_options) { ?>

        <?php $vertical_alignment = $projects_options['vertical_alignment']; ?>
        <?php $show_a_featured_image = $projects_options['show_a_featured_image']; ?>
        <?php $featured_image_placement = $projects_options['featured_image_placement']; ?>
        <?php $show_post_date = $projects_options['show_post_date']; ?>
        <?php $post_date_text = $projects_options['post_date_text']; ?>
        <?php $post_date_format = $projects_options['post_date_format']; ?>
        <?php $list_categories = $projects_options['list_categories']; ?>
        <?php $excerpt_length = $projects_options['excerpt_length']; ?>
        <?php $show_a_button_in_the_post_loop = $projects_options['show_a_button_in_the_post_loop']; ?>
        <?php $button_text = $projects_options['button_text']; ?>
        <?php $display_title_over_image = $projects_options['display_title_over_image']; ?>
        <?php $show_content = $projects_options['show_content']; ?>
        <?php $text_alignment = $projects_options['text_alignment']; ?>

<?php } ?>
<?php if ($vertical_alignment == "Middle") { 
    $vertical_alignment = "align-items-center";
} else {
    $vertical_alignment = "align-items-start";
} ?>
<?php if ($text_alignment == "Center") { 
    $text_alignment = "center";
} elseif ($text_alignment == "Right") { 
    $text_alignment = "right";
} else {
    $text_alignment = "";
} ?>
<?php if ($excerpt_length) { $excerpt_length = $excerpt_length; } else { $excerpt_length = 50; } ?> 
<?php if ($button_text) { $button_text = $button_text; } else { $button_text = "Read More"; } ?> 
<?php if ($post_date_text) { $post_date_text = $post_date_text.'&nbsp;'; } else { $post_date_text = ""; } ?> 
<?php if ($post_date_format) { $post_date_format = $post_date_format; } else { $post_date_format = "m-d-y"; } ?>
<?php if ($display_title_over_image == "Yes" && $show_a_featured_image == "Yes") {
	$featured_image_placement_class_1 = "col-12";
	$featured_image_placement_class_2 = "col-12";
} elseif ($featured_image_placement == "Left" && $show_a_featured_image == "Yes") {  
	$featured_image_placement_class_1 = "col-lg-4";
	$featured_image_placement_class_2 = "col-lg-8";
} elseif ($featured_image_placement == "Right" && $show_a_featured_image == "Yes") {
	$featured_image_placement_class_1 = "col-lg-4 order-lg-2";
	$featured_image_placement_class_2 = "col-lg-8 order-lg-1";
} elseif ($featured_image_placement == "Center" && $show_a_featured_image == "Yes") {
	$featured_image_placement_class_1 = "col-12";
	$featured_image_placement_class_2 = "col-12";
} else {
	$featured_image_placement_class_1 = "col-12";
	$featured_image_placement_class_2 = "col-12";
} ?>
<?php $alternate_link = esc_html(get_field("alternate_link", $post->ID)); ?>

<?php if (is_admin()) { ?>
<span class="post_link_wrapper wide">
<?php } elseif ('' == get_post()->post_content) { ?>
<span class="project_link_wrapper wide">
<?php } else { ?>
<a href="<?php the_permalink(); ?>" class="project_link_wrapper wide <?php echo $text_alignment; ?>">
<?php } ?>
	<div class="row <?php echo $vertical_alignment; ?>">
	<?php if ($show_a_featured_image == "Yes" && has_post_thumbnail()) { ?>
		<div class="<?php echo $featured_image_placement_class_1; ?>">
			<span class="project_img_wrapper">
				<?php $image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
				<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
				<?php if ($display_title_over_image == "Yes") { ?>
					<h3 class="img_wrapper_title"><?php the_title(); ?></h3>
				<?php } ?>
			</span>
		</div>
	<?php } ?>
		<div class="<?php echo $featured_image_placement_class_2; ?>">
			<?php if ($display_title_over_image == "No") { ?>
				<h3><?php the_title(); ?></h3>
			<?php } ?>
			<?php if ($show_post_date == "Yes") { ?>
				<h4><?php echo $post_date_text; ?><?php the_time($post_date_format); ?></h4>
			<?php } ?>
			<?php if ($list_categories == "Yes") { ?>
				<h5 class="post_loop_cats h6">
				<?php $terms = get_the_terms( $post->ID , 'projectcategory'); ?>
				<?php foreach ($terms as $cat) { ?>
					<span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
				<?php } ?>
				</h5> 
			<?php } ?>
			<?php if ($show_content == "Yes") { ?> 
				<?php echo '<p>'. excerpt($excerpt_length) . '</p>'; ?>
			<?php } ?>
			<?php if ($show_a_button_in_the_post_loop == "Yes" && '' !== get_post()->post_content) { ?>
				<span class="btn-mayecreate <?php echo $text_alignment; ?>"><?php echo $button_text; ?></span>
			<?php } ?>
		</div>
	</div>
<?php if ('' == get_post()->post_content || is_admin()) { ?>
</span>
<?php } else { ?>
</a>
<?php } ?>
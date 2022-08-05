<?php
$news_options = get_field('news_options', 'option');
if($news_options) { ?>

        <?php $vertical_alignment = $news_options['vertical_alignment']; ?>
        <?php $show_a_featured_image = $news_options['show_a_featured_image']; ?>
        <?php $featured_image_placement = $news_options['featured_image_placement']; ?>
        <?php $show_post_date = $news_options['show_post_date']; ?>
        <?php $post_date_text = $news_options['post_date_text']; ?>
        <?php $post_date_format = $news_options['post_date_format']; ?>
        <?php $list_categories = $news_options['list_categories']; ?>
        <?php $excerpt_length = $news_options['excerpt_length']; ?>
        <?php $show_a_button_in_the_post_loop = $news_options['show_a_button_in_the_post_loop']; ?>
        <?php $button_text = $news_options['button_text']; ?>
		<?php $number_of_columns = $news_options['post_page_block_number_of_columns']; ?>

<?php } ?>
<?php if ($number_of_columns == 'one') {
		$bootstrap_columns = "col-md-12";
	} elseif ($number_of_columns == 'two') {
		$bootstrap_columns = "col-md-6";
	} elseif ($number_of_columns == 'three') {
		$bootstrap_columns = "col-md-6 col-lg-4";
	} elseif ($number_of_columns == 'four') {
		$bootstrap_columns = "col-md-6 col-lg-3";
	} ?>
<?php if ($vertical_alignment == "Middle") { 
    $vertical_alignment = "align-items-center";
} else {
    $vertical_alignment = "align-items-start";
} ?>
<?php if ($excerpt_length) { $excerpt_length = $excerpt_length; } else { $excerpt_length = 50; } ?> 
<?php if ($button_text) { $button_text = $button_text; } else { $button_text = "Read More"; } ?> 
<?php if ($post_date_text) { $post_date_text = $post_date_text.'&nbsp;'; } else { $post_date_text = ""; } ?> 
<?php if ($post_date_format) { $post_date_format = $post_date_format; } else { $post_date_format = "m-d-y"; } ?>
<?php if ($featured_image_placement == "Left" && $show_a_featured_image == "Yes") {  
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
<div class="<?php echo $bootstrap_columns; ?>">
    <?php if ($alternate_link && ('' == get_post()->post_content)) { ?>
    <a href="<?php echo $alternate_link; ?>" class="post_link_wrapper wide" target="_blank">
    <?php } else { ?>
    <a href="<?php the_permalink(); ?>" class="post_link_wrapper wide">
    <?php } ?>
        <div class="row <?php echo $vertical_alignment; ?>">
        <?php if ($show_a_featured_image == "Yes" && has_post_thumbnail()) { ?>
            <div class="<?php echo $featured_image_placement_class_1; ?>">
                <span class="img_wrapper">
                    <?php $image_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
                    <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                </span>
            </div>
        <?php } ?>
            <div class="<?php echo $featured_image_placement_class_2; ?>">
                <h3><?php the_title(); ?></h3>
                <?php if ($show_post_date == "Yes") { ?>
                    <h5><?php echo $post_date_text; ?><?php the_time($post_date_format); ?></h5>
                <?php } ?>
                <?php if ($list_categories == "Yes") { ?>
                    <h6 class="post_loop_cats">
                    <?php $terms = get_the_terms( $post->ID , 'category'); ?>
                    <?php foreach ($terms as $cat) { ?>
                        <span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
                    <?php } ?>
                    </h6>
                <?php } ?>
                <?php echo '<p>'. excerpt($excerpt_length) . '</p>'; ?>
                <?php if ($show_a_button_in_the_post_loop == "Yes") { ?>
                    <span class="btn-mayecreate"><?php echo $button_text; ?></span>
                <?php } ?>
            </div>
        </div>
    </a>
</div>
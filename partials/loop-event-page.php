<?php
$event_options = get_field('event_options', 'option');
if($event_options) { ?>

        <?php $vertical_alignment = $event_options['vertical_alignment']; ?>
        <?php $show_a_featured_image = $event_options['show_a_featured_image']; ?>
        <?php $featured_image_placement = $event_options['featured_image_placement']; ?>
        <?php $show_post_date = $event_options['show_post_date']; ?>
        <?php $post_date_text = $event_options['post_date_text']; ?>
        <?php $post_date_format = $event_options['post_date_format']; ?>
        <?php $list_categories = $event_options['list_categories']; ?>
        <?php $excerpt_length = $event_options['excerpt_length']; ?>
        <?php $show_a_button_in_the_post_loop = $event_options['show_a_button_in_the_post_loop']; ?>
        <?php $button_text = $event_options['button_text']; ?>
		<?php $number_of_columns = $event_options['post_page_block_number_of_columns']; ?>
        <?php $text_alignment = $event_options['text_alignment']; ?>

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
<?php $registration_link = esc_html(get_field("registration_link", $post->ID)); ?>
<?php $event_start_date = esc_html(get_field("event_start_date", $post->ID)); ?>
<?php $event_end_date = esc_html(get_field("event_end_date", $post->ID)); ?>
<?php $event_start_time = esc_html(get_field("event_start_time", $post->ID)); ?>
<?php $event_end_time = esc_html(get_field("event_end_time", $post->ID)); ?>
<?php $event_location = esc_html(get_field("event_location", $post->ID)); ?>
<div class="<?php echo $bootstrap_columns; ?>">
    <?php if ($registration_link && ('' == get_post()->post_content)) { ?>
    <a href="<?php echo $registration_link; ?>" class="event_link_wrapper wide <?php echo $text_alignment; ?>" target="_blank">
    <?php } else { ?>
    <a href="<?php the_permalink(); ?>" class="event_link_wrapper wide <?php echo $text_alignment; ?>">
    <?php } ?>
        <div class="row g-5 <?php echo $vertical_alignment; ?>">
        <?php if ($show_a_featured_image == "Yes" && has_post_thumbnail()) { ?>
            <div class="<?php echo $featured_image_placement_class_1; ?>">
                <span class="event_img_wrapper">
                    <?php $image_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($image_id,'event', true); ?>
                    <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                </span>
            </div>
        <?php } ?>
            <div class="<?php echo $featured_image_placement_class_2; ?>">
                <div class="loop_content">
                    <h2 class="post_loop_title"><?php the_title(); ?></h2>
                    <?php if ($show_post_date == "Yes") { ?>
                        <p class="h4 post_loop_date"><?php echo $post_date_text; ?><?php the_time($post_date_format); ?></p>
                    <?php } ?>
                    <?php if ($list_categories == "Yes") { ?>
                        <p class="post_loop_cats h6">
                        <?php $terms = get_the_terms( $post->ID , 'eventcategory'); ?>
                        <?php foreach ($terms as $cat) { ?>
                            <span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
                        <?php } ?>
                        </p>
                    <?php } ?>
                    <p class="event_date"><i class="fa-regular fa-calendar-days"></i> <?php echo $event_start_date; ?><?php if ($event_end_date) { echo ' - '.$event_end_date; } ?></p>
                    <?php if ($event_start_time || $event_end_time) { ?>
                        <p class="event_time"><i class="fa-solid fa-clock"></i>
                        <?php if ($event_start_time) { echo $event_start_time; } ?>
                        <?php if ($event_end_time) { echo ' - '.$event_end_time; } ?>
                        </p>
                    <?php } ?>
                    <?php if ($event_location) { ?>
                        <p class="event_location"><i class="fa-solid fa-location-dot"></i> <?php echo $event_location; ?></p>
                    <?php } ?>
                    <?php echo '<p>'. excerpt($excerpt_length) . '</p>'; ?>
                    <?php if ($show_a_button_in_the_post_loop == "Yes") { ?>
                        <span class="btn-mayecreate <?php echo $text_alignment; ?>"><?php echo $button_text; ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </a>
</div>
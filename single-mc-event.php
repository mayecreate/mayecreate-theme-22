<?php
/**
 * The single post file for Projects.
*/
get_header(); ?>
<?php $event_options = get_field('event_options', 'option');
if($event_options) { ?>
    <?php $single_page_content_width = $event_options['single_page_content_width']; ?>
    <?php $single_page_show_a_featured_image = $event_options['single_page_show_a_featured_image']; ?>
    <?php $single_page_featured_image_alignment = $event_options['single_page_featured_image_alignment']; ?>
    <?php $single_page_show_post_date = $event_options['single_page_show_post_date']; ?>
    <?php $single_page_list_categories = $event_options['single_page_list_categories']; ?>
    <?php $post_date_text = $event_options['single_page_post_date_text']; ?>
    <?php $post_date_format = $event_options['single_page_post_date_format']; ?>
    <?php $show_related_posts = $event_options['single_page_show_related_posts']; ?>
    <?php $number_of_related_posts = $event_options['single_page_number_of_related_posts']; ?>
<?php } ?>  

<?php if ($single_page_content_width) { $single_page_content_width = $single_page_content_width.'px;margin-left:auto;margin-right:auto;'; } else { $single_page_content_width = "100%"; } ?> 
<?php if ($post_date_text) { $post_date_text = $post_date_text.'&nbsp;'; } else { $post_date_text = ""; } ?> 
<?php if ($post_date_format) { $post_date_format = $post_date_format; } else { $post_date_format = "m-d-y"; } ?>

<?php if ($single_page_featured_image_alignment == "Left") {  
	$featured_image_placement_class_1 = "col-lg-4";
	$featured_image_placement_class_2 = "col-lg-8";
} elseif ($single_page_featured_image_alignment == "Right") {
	$featured_image_placement_class_1 = "col-lg-4 order-lg-2";
	$featured_image_placement_class_2 = "col-lg-8 order-lg-1";
} elseif ($single_page_featured_image_alignment == "Center") {
	$featured_image_placement_class_1 = "col-12";
	$featured_image_placement_class_2 = "col-12";
} else {
	$featured_image_placement_class_1 = "col-12";
	$featured_image_placement_class_2 = "col-12";
} ?>
<?php $event_start_date = esc_html(get_field("event_start_date", $post->ID)); ?>
<?php $event_end_date = esc_html(get_field("event_end_date", $post->ID)); ?>
<?php $event_start_time = esc_html(get_field("event_start_time", $post->ID)); ?>
<?php $event_end_time = esc_html(get_field("event_end_time", $post->ID)); ?>
<?php $event_location = esc_html(get_field("event_location", $post->ID)); ?>
<?php $registration_type = esc_html(get_field("registration_type", $post->ID)); ?>
<?php $register_title = esc_html(get_field("registration_title", $post->ID)); ?>
<?php $registration_form_id = esc_html(get_field("registration_form_id", $post->ID)); ?>
<?php $registration_link = esc_html(get_field("registration_link", $post->ID)); ?>
<?php $registration_button_text = esc_html(get_field("registration_button_text", $post->ID)); ?>
<?php if ($register_title) { $register_title_use = $register_title; } else { $register_title_use = "Register"; } ?>
<?php if ($registration_button_text) { $registration_button_text_use = $registration_button_text; } else { $registration_button_text_use = "Register Here"; } ?>

        <div class="row g-5" style="max-width: <?php echo $single_page_content_width; ?>">
    
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if ($single_page_show_a_featured_image == "Yes" && has_post_thumbnail()) { ?>
                        <div class="<?php echo $featured_image_placement_class_1; ?>">
                            <?php $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id,'large', true); ?>
                            <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="aligncenter" />
                        </div>
                    <?php } ?>
                    <div class="<?php echo $featured_image_placement_class_2; ?>">
                        <h1 class="h2"><?php the_title(); ?></h1>
                        <?php if ($single_page_show_post_date == "Yes") { ?>
                            <p class="post_loop_date"><?php echo $post_date_text; ?><?php the_time($post_date_format); ?></p>
                        <?php } ?>
                        <?php if ($single_page_list_categories == "Yes") { ?>
                            <p class="post_loop_cats">
                            <?php $terms = get_the_terms( $post->ID , 'eventcategory'); ?>
                            <?php foreach ($terms as $cat) { ?>
                                <span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
                            <?php } ?>
                            </p>
                        <?php } ?>
                        <p class="single_event_date"><i class="fa-regular fa-calendar-days"></i> <?php echo $event_start_date; ?><?php if ($event_end_date) { echo ' - '.$event_end_date; } ?></p>
                        <?php if ($event_start_time || $event_end_time) { ?>
                            <p class="single_event_time"><i class="fa-solid fa-clock"></i>
                            <?php if ($event_start_time) { echo $event_start_time; } ?>
                            <?php if ($event_end_time) { echo ' - '.$event_end_time; } ?>
                            </p>
                        <?php } ?>
                        <?php if ($event_location) { ?>
                            <p class="single_event_location"><i class="fa-solid fa-location-dot"></i> <?php echo $event_location; ?></p>
                        <?php } ?>
                    
                        <?php the_content(); ?>
                        <?php if ($alternate_link) { ?>
                            <a href="<?php echo $alternate_link; ?>" target="_blank" class="btn-mayecreate">More Information</a>
                        <?php } ?>
                    </div>
                
                <?php endwhile; ?>
                                            
                <?php endif; ?>

                <?php if ($show_related_posts == "Yes") { ?>
                    <?php if ($number_of_related_posts) { $number_of_related_posts = $number_of_related_posts; } else { $number_of_related_posts = '1'; } ?>
                    <?php $terms = get_the_terms( $post->ID , 'eventcategory', array('fields' => 'ids')); ?>
                    <?php foreach ($terms as $cat) { ?>
                        <?php $querry_cat .= $cat->term_id.','; ?>
                    <?php } ?>
                    <?php // args
                    $args = array(
                    'posts_per_page'	=> $number_of_related_posts,
                    'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
                    'orderby' => 'date',
                    'post_type' => 'mc-event',
                    'post__not_in' => array( $post->ID ),
                    'paged' => $paged,
                    'tax_query' => array(
                        'relation' => 'OR',
                            array (
                                'taxonomy'  => 'eventcategory',
                                'field'    => 'ID',
                                'terms'     => array($querry_cat)
                            )
                        )
                    ); ?>

                    <?php // query
                    $wp_query = new WP_Query( $args );
                    if( $wp_query->have_posts() )
                    { ?>
                    <div class="col-12"><div class="divider"></div></div>
                    <?php // loop
                    while( $wp_query->have_posts() )
                    {
                    $wp_query->the_post();

                    ?>
                        <div class="col">
                            <?php get_template_part('partials/loop','event'); ?> 
                        </div>
                    <?php } // end the loop ?>
                    <!--Reset Query-->
                    <?php wp_reset_query();?> 
                    
                    <?php } ?>



                <?php } ?>

        </div>
        </div>
    </div>
<?php if ($registration_form_id || $registration_link) { ?>
<div class="pagebreak">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="center"><?php echo $register_title_use; ?></h2>
                <?php if ($registration_type == "Form") { ?>
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => $registration_form_id ) ); ?>
                <?php } elseif ($registration_type == "Link") { ?>
                    <a href="<?php echo $registration_link; ?>" class="btn-mayecreate center"><?php echo $registration_button_text_use; ?></a>
                <?php } ?>
            </div>
        </div>
            
<?php } ?>
<?php get_footer(); ?>
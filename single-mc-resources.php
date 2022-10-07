<?php
/**
 * The single post file for Projects.
*/
get_header(); ?>
<?php $resource_options = get_field('resource_options', 'option');
if($resource_options) { ?>
    <?php $single_page_content_width = $resource_options['single_page_content_width']; ?>
    <?php $single_page_show_a_featured_image = $resource_options['single_page_show_a_featured_image']; ?>
    <?php $single_page_featured_image_alignment = $resource_options['single_page_featured_image_alignment']; ?>
    <?php $single_page_show_post_date = $resource_options['single_page_show_post_date']; ?>
    <?php $single_page_list_categories = $resource_options['single_page_list_categories']; ?>
    <?php $post_date_text = $resource_options['single_page_post_date_text']; ?>
    <?php $post_date_format = $resource_options['single_page_post_date_format']; ?>
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

        <div class="row" style="max-width: <?php echo $single_page_content_width; ?>">
    
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
                        <?php if ($single_page_show_post_date == "Yes") { ?>
                            <h5><?php echo $post_date_text; ?><?php the_time($post_date_format); ?></h5>
                        <?php } ?>
                        <?php if ($single_page_list_categories == "Yes") { ?>
                            <h6 class="post_loop_cats">
                            <?php $terms = get_the_terms( $post->ID , 'resourcecategory'); ?>
                            <?php foreach ($terms as $cat) { ?>
                                <span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
                            <?php } ?>
                            </h6>
                        <?php } ?>
                    
                        <?php the_content(); ?>
                    </div>
                
                <?php endwhile; ?>
                                            
                <?php endif; ?>

        </div>
        </div>
    </div>
<?php get_footer(); ?>
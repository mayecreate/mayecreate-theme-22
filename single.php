<?php
/**
 * The single post file.
*/
get_header(); ?>
<?php $news_options = get_field('news_options', 'option');
if($news_options) { ?>
    <?php $single_page_content_width = $news_options['single_page_content_width']; ?>
    <?php $single_page_show_a_featured_image = $news_options['single_page_show_a_featured_image']; ?>
    <?php $single_page_featured_image_alignment = $news_options['single_page_featured_image_alignment']; ?>
    <?php $single_page_show_post_date = $news_options['single_page_show_post_date']; ?>
    <?php $single_page_list_categories = $news_options['single_page_list_categories']; ?>
    <?php $post_date_text = $news_options['single_page_post_date_text']; ?>
    <?php $post_date_format = $news_options['single_page_post_date_format']; ?>
    <?php $show_related_posts = $news_options['single_page_show_related_posts']; ?>
    <?php $number_of_related_posts = $news_options['single_page_number_of_related_posts']; ?>
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
<?php $alternate_link = esc_html(get_field("alternate_link", $post->ID)); ?>

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
                            <?php $terms = get_the_terms( $post->ID , 'category'); ?>
                            <?php foreach ($terms as $cat) { ?>
                                <span><?php echo $cat->name; ?></span><span class="post_loop_cats_sep">, </span>
                            <?php } ?>
                            </h6>
                        <?php } ?>
                    
                        <?php the_content(); ?>
                        <?php if ($alternate_link) { ?>
                            <a href="<?php echo $alternate_link; ?>" target="_blank" class="btn-mayecreate">More Information</a>
                        <?php } ?>
                    </div>
                
                <?php endwhile; ?>
                                            
                <?php endif; ?>

                <?php if ($show_related_posts) { ?>
                    <?php if ($number_of_related_posts) { $number_of_related_posts = $number_of_related_posts; } else { $number_of_related_posts = '1'; } ?>
                    <?php $terms = get_the_terms( $post->ID , 'category', array('fields' => 'ids')); ?>
                    <?php foreach ($terms as $cat) { ?>
                        <?php $querry_cat .= $cat->term_id.','; ?>
                    <?php } ?>
                    <?php // args
                    $args = array(
                    'posts_per_page'	=> $number_of_related_posts,
                    'order'			=> 'DESC', // ASC = OLDEST EVENT FIRST, DESC= NEWEST EVENT FIRST 
                    'orderby' => 'date',
                    'cat' => array($querry_cat),
                    'post__not_in' => array( $post->ID ),
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
                            <?php get_template_part('partials/loop','blog'); ?> 
                        </div>
                    <?php } // end the loop ?>
                    <!--Reset Query-->
                    <?php wp_reset_query();?> 
                    
                    <?php } ?>
            

                
                <?php } ?>

        </div>
        </div>
    </div>
<?php get_footer(); ?>
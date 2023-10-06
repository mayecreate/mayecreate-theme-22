<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
<?php $slide_content_text_alignment = get_field('slide_content_text_alignment', 'option'); ?>
<?php if ($slide_content_text_alignment == "Center") { 
    $slide_content_text_alignment_class = "center";
} elseif ($slide_content_text_alignment == "Right") { 
    $slide_content_text_alignment_class = "right";
} else {
    $slide_content_text_alignment_class = "";
} ?>
<?php $slide_content_placement = get_field('slide_content_placement', 'option'); ?>
<?php if ($slide_content_placement == "Bottom") { 
    $slide_content_placement_class = "bottom_content";
} elseif ($slide_content_placement == "Top") { 
    $slide_content_placement_class = "top_content";
} else {
    $slide_content_placement_class = "center_content";
} ?>
<?php
		
		/* If Position Indicators are to be displayed, display them
		===========================================================*/
		$show_indicator_dots = ('yes' == get_field('show_indicator_dots', 'option'));
		if($show_indicator_dots) {
			echo '<div class="carousel-indicators">';
			$slide_to = '0';
			$slide_label = '1';
			/* The Query for the First Indicator Dot.
			===========================================================*/ 
			$the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 10,
				'orderby' => 'menu_order',
				'order' => 'ASC', 
				));
			
				while ($the_query->have_posts() ) : $the_query->the_post();
					if( $the_query->current_post == 0 && !is_paged() ) {
						$active_class = 'class="active"  aria-current="true"';
					} else {
						$active_class = '';
					}
					
                	echo '<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="'.$slide_to++.'" '.$active_class.' aria-label="Slide '.$slide_label++.'"></button>';
    		
            	endwhile; wp_reset_postdata();

      		echo '</div>';
		} 
		?>
		
        <!-- Carousel items -->
        <div class="carousel-inner <?php echo $slide_content_placement_class; ?>">
    		
  			<?php $the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 10,
				'orderby' => 'menu_order',
				'order' => 'ASC', 
				));
				while ($the_query->have_posts() ) : $the_query->the_post();
				?>
    			<?php if( $the_query->current_post == 0 && !is_paged() ) {
				$active_class = "active";
				} else {
				$active_class = "";
				} ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slider' ); ?>
				<?php $image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
				<?php if ($image_alt) { $image_alt = $image_alt; } else { $image_alt = "No alt tag provided"; } ?>
                <div class="carousel-item item <?php echo $active_class; ?>" style="background-image: url('<?php echo $image[0]; ?>')">
			  		<h2 class="sr-only sr-only-focusable">This carousel slider image is an image of: <?php echo $image_alt; ?></h2>
                	<?php 
						$slideTitle = get_field('custom_slide_title');
						$slideText 	= get_field('text_for_slide');
						$link_text = get_field('link_text');
						$slideURL 	= get_field('link_for_slide');

						$whole_slide = ('whole_slide' == get_field('slide_linking', 'option'));
						$link_w_button = ('link_w_button' == get_field('slide_linking', 'option'));

						if ($whole_slide && $slideURL){
							echo '<a href="' .$slideURL. '">';
						}
							if ($slideTitle || $slideText) {
								echo '<div class="slideDesc"><div class="slideDesc_inner '. $slide_content_text_alignment_class .'">';
									if($slideTitle){
										echo '<h2 class="slideTitle">' .$slideTitle. '</h2>';
									}
									if($slideText){
										echo '<p class="slideText">' .$slideText. '</p>';
									}

									if ($link_w_button && $slideURL && $link_text){
										echo '<a class="btn-mayecreate center" href="' .$slideURL. '">'. $link_text .'</a>';
									}
									if ($link_w_button && $slideURL && !$link_text){
										echo '<a class="btn-mayecreate center" href="' .$slideURL. '">Read More</a>';
									}
								echo '</div></div>';
							}
						if ($whole_slide && $slideURL){
							echo '</a>';
						}
						
					?>
                </div><!-- item active -->
    			<?php endwhile; wp_reset_postdata(); ?>

        </div><!--// carousel-inner -->
        
		<?php
        
		/* If directional navigation is to be displayed, display it
		===========================================================*/
		$show_direction_arrows = ('yes' == get_field('show_direction_arrows', 'option'));
		if($show_direction_arrows) { ?>
			<button class="carousel-control-prev left" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next right" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		<?php } ?>
</div>

<?php wp_reset_query(); ?>
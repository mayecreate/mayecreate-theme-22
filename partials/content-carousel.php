<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Carousel items -->
        <div class="carousel-inner">
    		
  		<?php $the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 1,
				'orderby' => 'date',
				'order' => 'ASC'
				));
				while ($the_query->have_posts() ) : $the_query->the_post();
				?>
    				
                
                
                <div class="item active">
                	<?php 
							$slideTitle = get_field('custom_slide_title');
							$slideURL 	= get_field('link_for_slide');
							$slideText 	= get_field('text_for_slide');
							
							
							if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'No') && ($slideURL) && ($slideText) && ($slideTitle)){
								echo '<a href="' .$slideURL. '">';
								echo the_post_thumbnail('slider');
								echo'</a>';
								echo '<div class="slideDesc">';
								echo '<a class="slideTitle" href="' .$slideURL. '">';
								echo $slideTitle;
								echo '</a>';
								echo '<span class="slideText">' .$slideText. '</span>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'No') && ($slideURL) && ($slideTitle)) {
								echo '<a href="' .$slideURL. '">';
								echo the_post_thumbnail('slider');
								echo'</a>';
								echo '<div class="slideDesc">';
								echo '<a class="slideTitle" href="' .$slideURL. '">';
								echo $slideTitle;
								echo '</a>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'Yes') && ($slideURL) && ($slideText) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">' . $slideTitle . '</span>';
								echo '<span class="slideText">' . $slideText . '</span>';
								echo '</div>';
								echo '<a class="btn btn-mayecreate" href="' .$slideURL. '">Read More</a>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'Yes') && ($slideURL) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">' . $slideTitle . '</span>';
								echo '</div>';
								echo '<a class="btn btn-mayecreate" href="' .$slideURL. '">Read More</a>';
							
							} else if ((get_field('add_link_to_slide') == 'No') && ($slideText) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">';
								echo  $slideTitle;
								echo '</span>';
								echo '<span class="slideText">' .$slideText. '</span>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'No') && ($slideTitle) && (!$slideText) ) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc"><span class="slideTitle">'; 
								echo $slideTitle; 
								echo '</span></div>';
							
							} else if ((get_field('add_link_to_slide') == 'No') && (!$slideTitle) && (!$slideText) ) {
								echo the_post_thumbnail('slider');
							
							} ?>
				
                </div><!-- item active -->
    			<?php endwhile; wp_reset_postdata(); ?>
         
         
		 <?php $the_query = new WP_Query(array(
				'post_type' => 'carousel_slides',
				'posts_per_page' => 6,
				'offset' => 1,
				'orderby' => 'date',
				'order' => 'ASC'
				));
				while ($the_query->have_posts() ) : $the_query->the_post();
				?>
    				
                <div class="item">
                	<?php 
							$slideTitle = get_field('custom_slide_title');
							$slideURL 	= get_field('link_for_slide');
							$slideText 	= get_field('text_for_slide');
							
							
							if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'No') && ($slideURL) && ($slideText) && ($slideTitle)){
								echo '<a href="' .$slideURL. '">';
								echo the_post_thumbnail('slider');
								echo'</a>';
								echo '<div class="slideDesc">';
								echo '<a class="slideTitle" href="' .$slideURL. '">';
								echo $slideTitle;
								echo '</a>';
								echo '<span class="slideText">' .$slideText. '</span>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'No') && ($slideURL) && ($slideTitle)) {
								echo '<a href="' .$slideURL. '">';
								echo the_post_thumbnail('slider');
								echo'</a>';
								echo '<div class="slideDesc">';
								echo '<a class="slideTitle" href="' .$slideURL. '">';
								echo $slideTitle;
								echo '</a>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'Yes') && ($slideURL) && ($slideText) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">' . $slideTitle . '</span>';
								echo '<span class="slideText">' . $slideText . '</span>';
								echo '<a class="btn btn-mayecreate" href="' .$slideURL. '">Read More</a>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'Yes') && (get_field('add_link_as_button') == 'Yes') && ($slideURL) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">' . $slideTitle . '</span>';
								echo '<a class="btn btn-mayecreate" href="' .$slideURL. '">Read More</a>';
								echo '</div>';
								
							
							} else if ((get_field('add_link_to_slide') == 'No') && ($slideText) && ($slideTitle)) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc">';
								echo '<span class="slideTitle">';
								echo  $slideTitle;
								echo '</span>';
								echo '<span class="slideText">' .$slideText. '</span>';
								echo '</div>';
							
							} else if ((get_field('add_link_to_slide') == 'No') && ($slideTitle) && (!$slideText) ) {
								echo the_post_thumbnail('slider');
								echo '<div class="slideDesc"><span class="slideTitle">'; 
								echo $slideTitle; 
								echo '</span></div>';
							
							} else if ((get_field('add_link_to_slide') == 'No') && (!$slideTitle) && (!$slideText) ) {
								echo the_post_thumbnail('slider');
							
							} ?>
				
                </div><!-- item -->
    			<?php endwhile; wp_reset_postdata(); ?>

        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="icon-left-open"></span></a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="icon-right-open"></span></a>
</div>

<?php wp_reset_query(); ?>
<?php
/**
 * The single post file.
*/
get_header(); ?>
        
        <div class="row">
            <div class="col-md-12">
    
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
				
                    <?php the_content(); ?>
                
                <?php endwhile; ?>
                                            
                <?php endif; ?>
            
            </div><!-- 8 -->

        </div>
        </div>
    </div>
<?php get_footer(); ?>
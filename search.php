<?php get_header(); ?>

<div class="row justify-content-center">
        
            	                
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <?php get_template_part('partials/loop','blog-page'); ?>
    
        <?php endwhile; ?>
    

    </div>
<div class="row justify-content-center">
                <?php
                    $prev_link = get_previous_posts_link(__('&laquo; Newer Entries', 'kubrick'));
                    $next_link = get_next_posts_link(__('Older Entries &raquo;', 'kubrick'));
                ?>
                                                
                <?php if ($prev_link || $next_link): ?>
                                                
                    <div class="col-md-12">
						<div class="post_nav_wrapper">
							<?php echo $prev_link; ?>
							<?php echo $next_link; ?>
						</div>
                    </div>                    

                <?php endif; ?>
                <?php else : ?>
                    <div class="col-md-12">
						<h2>Sorry, nothing matches your search.</h2>
					</div>
                                            
                <?php endif; ?>
            
        </div>
	</div>
</div>
<?php get_footer(); ?>
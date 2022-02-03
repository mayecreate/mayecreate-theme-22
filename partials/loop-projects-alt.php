<div class="col-md-12">
	<a href="<?php the_permalink(); ?>" class="post_link_wrapper wide">
		<div class="row">
			<div class="col-md-6">
				<span class="img_wrapper">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php $image_id = get_post_thumbnail_id();
						$image_url = wp_get_attachment_image_src($image_id,'blog', true); ?>
						<img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } else { ?>
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/PATH-TO-DEFAULT-IMAGE.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
					<?php } ?> 
				</span>
			</div><div class="col-md-6">
				<h3><?php the_title(); ?></h3>
				<?php echo '<p>'. excerpt(55) . '</p>'; ?>
				<span class="btn-mayecreate">READ MORE</span>
			</div>
		</div>
	</a>
</div>
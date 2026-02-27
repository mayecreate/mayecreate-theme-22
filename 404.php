<?php get_header(); ?>

		<div class="row">
			<div class="col-md-12">
				<?php $not_found_page_content = get_field('not_found_page_content', 'option'); ?>
				<?php if ($not_found_page_content) { ?>
					<?php echo $not_found_page_content; ?>
				<?php } else { ?>
					<h2>Looks like that page doesn't exist. Sorry.</h2>
				<?php } ?>
			</div>
		</div>		   
	</div><!-- page -->
</div><!-- page -->


<?php get_footer(); ?>
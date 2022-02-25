<?php 
/*
==========================================================
FOOTER Menu, Social Media Bar and Credits
==========================================================
*/

global $containerWidth;
?>

<div class="<?php echo $containerWidth; ?>" >
	<div class="row align-items-center">
		
		<div class="col-md-4">
			<?php mayecreate_custom_footer_logo(); ?>
		</div>

		<div class="col-md-8">
			<?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
			
			$footerMenu = array(
				'theme_location'  => 'footer-menu',
				'container'       => 'nav',
				'container_class' => '',
				'container_id'    => 'footer_nav',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '<span>',
				'link_after'      => '</span>',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => ''
				); ?>

			<?php wp_nav_menu($footerMenu); ?>

			<?php get_template_part('partials/content','social'); ?>

		</div>
		
	</div>	
</div>

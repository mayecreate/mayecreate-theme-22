<?php global $containerWidth; ?> 
<?php $show_top_navbar = ('yes' == get_field('show_top_navbar', 'option')); ?>

<?php if ($show_top_navbar) { ?>
        <div id="navbarTop" class="navbar navbar-default">
            <div class="<?php echo $containerWidth; ?>" > 
                <?php  // Visit http://codex.wordpress.org/Function_Reference/wp_nav_menu for explanation of how this works.
                    
                    $topMenu = array(
                        'theme_location'  => 'top-menu',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => 'top_nav',
                        'menu_class'      => 'menu pull-right',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '<span>',
                        'link_after'      => '</span>',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 3,
                        'walker'          => ''
                        ); ?>
    
                    <?php wp_nav_menu($topMenu); ?>
            </div>
        </div>
<?php } ?>
   

<div id="navbarBottom" class="navbar navbar-default ">
	<div class="<?php echo $containerWidth; ?>" > 
		<div class="navbar-header">

			<div id="mobile_menu">
				<a href="#drawer-menu" class="nav-button nav-button-x">
					<span>toggle menu</span>
				</a>
			</div>

			<?php mayecreate_custom_logo(); ?>

		</div>
		<?php /*?><form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<input class="text" type="text" value=" " name="s" id="s" placeholder="Search" />
		<input type="submit" class="submit" name="submit" value="" />
		</form><?php */?>
		<?php

		$mainMenu = array(
			'theme_location'  => 'main-menu',
			'container'       => 'nav',
			'container_class' => '',
			'container_id'    => 'main_nav',
			'menu_class'      => 'menu pull-right',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '<span>',
			'link_after'      => '</span>',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 3,
			'walker'          => ''
			); ?>

		<?php wp_nav_menu($mainMenu); ?>
	</div>
</div>
	
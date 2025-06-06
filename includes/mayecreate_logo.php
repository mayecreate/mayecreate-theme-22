<?php 

/*
==========================================================
CUSTOM LOGO
==========================================================
*/

function mayecreate_custom_logo() { 
	$custom_logo = get_field('site_logo', 'option');
	if ($custom_logo) {
		echo '<div id="branding-container">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo '<img class="site-logo" src="'. $custom_logo . '" alt=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" width="" height="" />';
		echo '</a>'; 
		echo '</div>';
	} else { 
		echo '<div id="branding-container">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo bloginfo('name');
		echo '</a>';
		echo '</div>';
	}
}

function mayecreate_custom_footer_logo() { 
	$optional_footer_logo = get_field('optional_footer_logo', 'option');
	$custom_logo = get_field('site_logo', 'option');
	if ($optional_footer_logo) {
		echo '<div id="branding-container-footer">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo '<img class="site-logo" src="'. $optional_footer_logo . '" alt=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" width="" height="" />';
		echo '</a>'; 
		echo '</div>';
	} elseif ($custom_logo) {
		echo '<div id="branding-container-footer">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo '<img class="site-logo" src="'. $custom_logo . '" alt=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" width="" height="" />';
		echo '</a>'; 
		echo '</div>';
	} else { 
		echo '<div id="branding-container-footer">';
		echo '<a class="brand" href="' . home_url() . '" title=" ' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
		echo bloginfo('name');
		echo '</a>';
		echo '</div>';
	}
}

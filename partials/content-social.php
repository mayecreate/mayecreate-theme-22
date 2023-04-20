<?php 
$social_media = get_field('social_media', 'option');
if( $social_media ) {
    echo '<ul class="social">';
    foreach( $social_media as $media ) {
        $social_site = $media['social_site'];
        $social_icon = $media['social_icon'];
        $social_title = $media['social_title'];
		echo '<li><a target="_blank" href="' . $social_site .'" title="Social Media Link for '.$social_title.'"><i class="fa-brands fab fa-' . $social_icon . '" title="Social Media Icon for '.$social_title.'"></i></a></li>';
    }
    echo '</ul>';
} ?>
<?php 
$social_media = get_field('social_media', 'option');
if( $social_media ) {
    echo '<ul class="social">';
    foreach( $social_media as $media ) {
        $social_site = $media['social_site'];
        $social_icon = $media['social_icon'];
		echo '<li><a target="_blank" href="' . $social_site .'"><i class="fa-brands fab fa-' . $social_icon . '"></i></a></li>';
    }
    echo '</ul>';
} ?>
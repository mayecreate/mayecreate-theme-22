<style>
/* Colors From Site Theme Options */
<?php
$body_background_color = (get_field('body_background_color', 'option'));

$primary_site_color = (get_field('primary_site_color', 'option'));
$secondary_color = (get_field('secondary_color', 'option'));

$link_color = (get_field('link_color', 'option'));
$link_hover_color = (get_field('link_hover_color', 'option'));

$button_color = (get_field('button_color', 'option'));
$button_background_color = (get_field('button_background_color', 'option'));
$button_hover_color = (get_field('button_hover_color', 'option'));
$button_hover_background_color = (get_field('button_hover_background_color', 'option'));

$top_nav_background_color = (get_field('top_nav_background_color', 'option'));
$top_nav_link_color = (get_field('top_nav_link_color', 'option'));
$top_nav_link_hover_color = (get_field('top_nav_link_hover_color', 'option'));

$main_nav_background_color = (get_field('main_nav_background_color', 'option'));
$main_nav_link_color = (get_field('main_nav_link_color', 'option'));
$main_nav_link_hover_color = (get_field('main_nav_link_hover_color', 'option'));

$footer_background_color = (get_field('footer_background_color', 'option'));
$footer_text_color = (get_field('footer_text_color', 'option'));
$footer_link_color = (get_field('footer_link_color', 'option'));
$footer_link_hover_color = (get_field('footer_link_hover_color', 'option'));

$credits_background_color = (get_field('credits_background_color', 'option'));
$credits_text_color = (get_field('credits_text_color', 'option'));
$credits_link_color = (get_field('credits_link_color', 'option'));
$credits_link_hover_color = (get_field('credits_link_hover_color', 'option'));

$divider_color = (get_field('divider_color', 'option'));

$primary_font = (get_field('primary_font', 'option')); 
    if($primary_font) { $primary_font = $primary_font; } else { $primary_font = "'Roboto', sans-serif"; }
$main_heading_font = (get_field('main_heading_font', 'option')); 
    if($main_heading_font) { $main_heading_font = $main_heading_font; } else { $main_heading_font = $primary_font; }
$heading_1_font = (get_field('heading_1_font', 'option'));
    if($heading_1_font) { $heading_1_font = $heading_1_font; } else { $heading_1_font = $main_heading_font; }
$heading_2_font = (get_field('heading_2_font', 'option'));
    if($heading_2_font) { $heading_2_font = $heading_2_font; } else { $heading_2_font = $main_heading_font; }
$heading_3_font = (get_field('heading_3_font', 'option'));
    if($heading_3_font) { $heading_3_font = $heading_3_font; } else { $heading_3_font = $main_heading_font; }
$heading_4_font = (get_field('heading_4_font', 'option'));
    if($heading_4_font) { $heading_4_font = $heading_4_font; } else { $heading_4_font = $main_heading_font; }
$heading_5_font = (get_field('heading_5_font', 'option'));
    if($heading_5_font) { $heading_5_font = $heading_5_font; } else { $heading_5_font = $main_heading_font; }
$heading_6_font = (get_field('heading_6_font', 'option'));
    if($heading_6_font) { $heading_6_font = $heading_6_font; } else { $heading_6_font = $main_heading_font; }

$body_font_size = (get_field('body_font_size', 'option')); 
$body_font_size_use = $body_font_size / 10; 
$heading_1_font_size = (get_field('heading_1_font_size', 'option')); 
$heading_1_font_size_use = $heading_1_font_size / 10;
$heading_2_font_size = (get_field('heading_2_font_size', 'option')); 
$heading_2_font_size_use = $heading_2_font_size / 10;
$heading_3_font_size = (get_field('heading_3_font_size', 'option')); 
$heading_3_font_size_use = $heading_3_font_size / 10;
$heading_4_font_size = (get_field('heading_4_font_size', 'option')); 
$heading_4_font_size_use = $heading_4_font_size / 10;
$heading_5_font_size = (get_field('heading_5_font_size', 'option')); 
$heading_5_font_size_use = $heading_5_font_size / 10;
$heading_6_font_size = (get_field('heading_6_font_size', 'option')); 
$heading_6_font_size_use = $heading_6_font_size / 10;

$heading_1_color = (get_field('heading_1_color', 'option')); 
	if($heading_1_color) { $heading_1_color = $heading_1_color; } else { $heading_1_color = '#fff'; }
$heading_2_color = (get_field('heading_2_color', 'option')); 
	if($heading_2_color) { $heading_2_color = $heading_2_color; } else { $heading_2_color = $secondary_color; }
$heading_3_color = (get_field('heading_3_color', 'option')); 
	if($heading_3_color) { $heading_3_color = $heading_3_color; } else { $heading_3_color = $secondary_color; }
$heading_4_color = (get_field('heading_4_color', 'option')); 
	if($heading_4_color) { $heading_4_color = $heading_4_color; } else { $heading_4_color = $secondary_color; }
$heading_5_color = (get_field('heading_5_color', 'option')); 
	if($heading_5_color) { $heading_5_color = $heading_5_color; } else { $heading_5_color = $secondary_color; }
$heading_6_color = (get_field('heading_6_color', 'option')); 
	if($heading_6_color) { $heading_6_color = $heading_6_color; } else { $heading_6_color = $secondary_color; }

$heading_1_font_weight = (get_field('heading_1_font_weight', 'option')); 
	if($heading_1_font_weight) { $heading_1_font_weight = $heading_1_font_weight; } else { $heading_1_font_weight = '400'; }
$heading_2_font_weight = (get_field('heading_2_font_weight', 'option')); 
	if($heading_2_font_weight) { $heading_2_font_weight = $heading_2_font_weight; } else { $heading_2_font_weight = '400'; }
$heading_3_font_weight = (get_field('heading_3_font_weight', 'option')); 
	if($heading_3_font_weight) { $heading_3_font_weight = $heading_3_font_weight; } else { $heading_3_font_weight = '400'; }
$heading_4_font_weight = (get_field('heading_4_font_weight', 'option')); 
	if($heading_4_font_weight) { $heading_4_font_weight = $heading_4_font_weight; } else { $heading_4_font_weight = '400'; }
$heading_5_font_weight = (get_field('heading_5_font_weight', 'option')); 
	if($heading_5_font_weight) { $heading_5_font_weight = $heading_5_font_weight; } else { $heading_5_font_weight = '400'; }
$heading_6_font_weight = (get_field('heading_6_font_weight', 'option')); 
	if($heading_6_font_weight) { $heading_6_font_weight = $heading_6_font_weight; } else { $heading_6_font_weight = '400'; }

$pagebreak_background_color = (get_field('pagebreak_background_color', 'option'));
	if($pagebreak_background_color) { $pagebreak_background_color = $pagebreak_background_color; } else { $pagebreak_background_color = '#eee'; }
$pagebreak_heading_color = (get_field('pagebreak_heading_color', 'option'));
	if($pagebreak_heading_color) { $pagebreak_heading_color = $pagebreak_heading_color; } else { $pagebreak_heading_color = $secondary_color; }
$pagebreak_text_color = (get_field('pagebreak_text_color', 'option'));
	if($pagebreak_text_color) { $pagebreak_text_color = $pagebreak_text_color; } else { $pagebreak_text_color = $primary_color; }
$pagebreak_link_color = (get_field('pagebreak_link_color', 'option'));
	if($pagebreak_link_color) { $pagebreak_link_color = $pagebreak_link_color; } else { $pagebreak_link_color = $link_color; }
$pagebreak_link_hover_color = (get_field('pagebreak_link_hover_color', 'option'));
	if($pagebreak_link_hover_color) { $pagebreak_link_hover_color = $pagebreak_link_hover_color; } else { $pagebreak_link_hover_color = $link_hover_color; }


$pagebreak_button_text_color = (get_field('pagebreak_button_text_color', 'option'));
	if($pagebreak_button_text_color) { $pagebreak_button_text_color = $pagebreak_button_text_color; } else { $pagebreak_button_text_color = $button_color; }
$pagebreak_button_background_color = (get_field('pagebreak_button_background_color', 'option'));
	if($pagebreak_button_background_color) { $pagebreak_button_background_color = $pagebreak_button_background_color; } else { $pagebreak_button_background_color = $button_background_color; }
$pagebreak_button_text_hover_color = (get_field('pagebreak_button_text_hover_color', 'option'));
	if($pagebreak_button_text_hover_color) { $pagebreak_button_text_hover_color = $pagebreak_button_text_hover_color; } else { $pagebreak_button_text_hover_color = $button_hover_color; }
$pagebreak_button_background_hover_color = (get_field('pagebreak_button_background_hover_color', 'option'));
	if($pagebreak_button_background_hover_color) { $pagebreak_button_background_hover_color = $pagebreak_button_background_hover_color; } else { $pagebreak_button_background_hover_color = $button_hover_background_color; }

$fixed_pagebreak_background = (get_field('fixed_pagebreak_background', 'option'));
if ($fixed_pagebreak_background == "Yes") {
	$pagebreak_background_attachment = "fixed";
} else {
	$pagebreak_background_attachment = "local";
}

$ul_li_bullet = (get_field('ul_li_bullet', 'option'));
if ($ul_li_bullet) {
	$ul_li_bullet = "url('".$ul_li_bullet."')";
} else {
	$ul_li_bullet = "circle";
}

?>
:root {
	--body_background_color: <?php echo $body_background_color; ?>;

	--primary_site_color: <?php echo $primary_site_color; ?>;
	--secondary_color: <?php echo $secondary_color; ?>;

	--link_color: <?php echo $link_color; ?>;
	--link_hover_color: <?php echo $link_hover_color; ?>;

	--top_nav_background_color: <?php echo $top_nav_background_color; ?>;
	--top_nav_link_color: <?php echo $top_nav_link_color; ?>;
	--top_nav_link_hover_color: <?php echo $top_nav_link_hover_color; ?>;

	--main_nav_background_color: <?php echo $main_nav_background_color; ?>;
	--main_nav_link_color: <?php echo $main_nav_link_color; ?>;
	--main_nav_link_hover_color: <?php echo $main_nav_link_hover_color; ?>;

	--footer_background_color: <?php echo $footer_background_color; ?>;
	--footer_text_color: <?php echo $footer_text_color; ?>;
	--footer_link_color: <?php echo $footer_link_color; ?>;
	--footer_link_hover_color: <?php echo $footer_link_hover_color; ?>;

	--credits_background_color: <?php echo $credits_background_color; ?>;
	--credits_text_color: <?php echo $credits_text_color; ?>;
	--credits_link_color: <?php echo $credits_link_color; ?>;
	--credits_link_hover_color: <?php echo $credits_link_hover_color; ?>;

	--button_color: <?php echo $button_color; ?>;
	--button_background_color: <?php echo $button_background_color; ?>;
	--button_hover_color: <?php echo $button_hover_color; ?>;
	--button_hover_background_color: <?php echo $button_hover_background_color; ?>;

	--divider_color: <?php echo $divider_color; ?>;

	--primary_font: <?php echo $primary_font; ?>;
	--main_heading_font: <?php echo $main_heading_font; ?>;
	--heading_1_font: <?php echo $heading_1_font; ?>;
	--heading_2_font: <?php echo $heading_2_font; ?>;
	--heading_3_font: <?php echo $heading_3_font; ?>;
	--heading_4_font: <?php echo $heading_4_font; ?>;
	--heading_5_font: <?php echo $heading_5_font; ?>;
	--heading_6_font: <?php echo $heading_6_font; ?>;

	--body_font_size: <?php echo $body_font_size_use; ?>rem; /* 10 ÷ $rembase */
	--heading_1_font_size: <?php echo $heading_1_font_size_use; ?>rem;
	--heading_2_font_size: <?php echo $heading_2_font_size_use; ?>rem;
	--heading_3_font_size: <?php echo $heading_3_font_size_use; ?>rem;
	--heading_4_font_size: <?php echo $heading_4_font_size_use; ?>rem;
	--heading_5_font_size: <?php echo $heading_5_font_size_use; ?>rem;
	--heading_6_font_size: <?php echo $heading_6_font_size_use; ?>rem;

	--body_font_size_admin: <?php echo $body_font_size; ?>px;
	--heading_1_font_size_admin: <?php echo $heading_1_font_size; ?>px;
	--heading_2_font_size_admin: <?php echo $heading_2_font_size; ?>px;
	--heading_3_font_size_admin: <?php echo $heading_3_font_size; ?>px;
	--heading_4_font_size_admin: <?php echo $heading_4_font_size; ?>px;
	--heading_5_font_size_admin: <?php echo $heading_5_font_size; ?>px;
	--heading_6_font_size_admin: <?php echo $heading_6_font_size; ?>px;
	
	--heading_1_color: <?php echo $heading_1_color; ?>;
	--heading_2_color: <?php echo $heading_2_color; ?>;
	--heading_3_color: <?php echo $heading_3_color; ?>;
	--heading_4_color: <?php echo $heading_4_color; ?>;
	--heading_5_color: <?php echo $heading_5_color; ?>;
	--heading_6_color: <?php echo $heading_6_color; ?>;
	
	--heading_1_font_weight: <?php echo $heading_1_font_weight; ?>;
	--heading_2_font_weight: <?php echo $heading_2_font_weight; ?>;
	--heading_3_font_weight: <?php echo $heading_3_font_weight; ?>;
	--heading_4_font_weight: <?php echo $heading_4_font_weight; ?>;
	--heading_5_font_weight: <?php echo $heading_5_font_weight; ?>;
	--heading_6_font_weight: <?php echo $heading_6_font_weight; ?>;

	--pagebreak_background_color: <?php echo $pagebreak_background_color; ?>; 
	--pagebreak_heading_color: <?php echo $pagebreak_heading_color; ?>;
	--pagebreak_text_color: <?php echo $pagebreak_text_color; ?>;
	--pagebreak_link_color: <?php echo $pagebreak_link_color; ?>;
	--pagebreak_link_hover_color: <?php echo $pagebreak_link_hover_color; ?>;
	--pagebreak_button_text_color: <?php echo $pagebreak_button_text_color; ?>;
	--pagebreak_button_background_color: <?php echo $pagebreak_button_background_color; ?>;
	--pagebreak_button_text_hover_color: <?php echo $pagebreak_button_text_hover_color; ?>;
	--pagebreak_button_background_hover_color: <?php echo $pagebreak_button_background_hover_color; ?>;
	--pagebreak_background_attachment: <?php echo $pagebreak_background_attachment; ?>;

	--ul_li_bullet: <?php echo $ul_li_bullet; ?>;
}
</style>
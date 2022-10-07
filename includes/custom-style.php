<style>
/* Colors From Site Theme Options */
<?php
$container_width = (get_field('container_width', 'option'));
$home_container_width = (get_field('home_container_width', 'option'));
$headerfooter_container_width = (get_field('headerfooter_container_width', 'option'));

if ($container_width) { $container_width = $container_width; } else { $container_width = '1640'; }
if ($home_container_width) { $home_container_width = $home_container_width; } else { $home_container_width = $container_width; }
if ($headerfooter_container_width) { $headerfooter_container_width = $headerfooter_container_width; } else { $headerfooter_container_width = $container_width; }

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

$team_options = get_field('team_options', 'option');
if($team_options) {

	$team_background_color = $team_options['background_color'];
	$team_divider_line_color = $team_options['divider_line_color'];
	$team_border_radius = $team_options['border_radius'];
	$box_shadow = $team_options['box_shadow'];
	$team_box_shadow_color = $team_options['box_shadow_color'];
	$team_image_border_radius = $team_options['image_border_radius'];
	$team_name_font = $team_options['name_font'];
	$team_name_color = $team_options['name_color'];
	$team_content_font = $team_options['content_font'];
	$team_content_color = $team_options['content_color'];
	$team_expand_button_color = $team_options['expand_button_color'];
	$team_expand_button_background = $team_options['expand_button_background'];
	$team_expand_button_color_hover = $team_options['expand_button_color_hover'];
	$team_expand_button_background_hover = $team_options['expand_button_background_hover'];
	$team_link_hover_color = $team_options['link_hover_color'];
	$team_block_or_table = $team_options['block_or_table'];
	$team_block_padding = $team_options['block_padding'];
	$team_border_width = $team_options['border_width'];
	$team_border_color = $team_options['border_color'];
	$team_border_color_top = $team_options['border_color_top'];
	$team_border_color_right = $team_options['border_color_right'];
	$team_border_color_bottom = $team_options['border_color_bottom'];
	$team_border_color_left = $team_options['border_color_left'];
	$team_image_border_width = $team_options['image_border_width'];
	$team_image_border_color = $team_options['image_border_color'];
	$team_image_border_color_top = $team_options['image_border_color_top'];
	$team_image_border_color_right = $team_options['image_border_color_right'];
	$team_image_border_color_bottom = $team_options['image_border_color_bottom'];
	$team_image_border_color_left = $team_options['image_border_color_left'];
	$team_name_border_bottom_width = $team_options['name_border_bottom_width'];
	$team_name_border_bottom_color = $team_options['name_border_bottom_color'];

}
if ($team_background_color) { $team_background_color = $team_background_color; } else { $team_background_color = 'transparent'; }
if ($team_divider_line_color) { $team_divider_line_color = $team_divider_line_color; } else { $team_divider_line_color = $team_background_color; }
if ($team_border_radius) { $team_border_radius = $team_border_radius; } else { $team_border_radius = '0'; }
if ($team_box_shadow_color && $box_shadow =='Yes') { $team_box_shadow_color = $team_box_shadow_color; } else { $team_box_shadow_color = 'transparent'; }
if ($team_image_border_radius) { $team_image_border_radius = $team_image_border_radius; } else { $team_image_border_radius = '0'; }
if ($team_name_font) { $team_name_font = $team_name_font; } else { $team_name_font = $main_heading_font; }
if ($team_name_color) { $team_name_color = $team_name_color; } else { $team_name_color = $secondary_color; }
if ($team_content_font) { $team_content_font = $team_content_font; } else { $team_content_font = $primary_font; }
if ($team_content_color) { $team_content_color = $team_content_color; } else { $team_content_color = $primary_site_color; }
if ($team_expand_button_color) { $team_expand_button_color = $team_expand_button_color; } else { $team_expand_button_color = $button_color; }
if ($team_expand_button_background) { $team_expand_button_background = $team_expand_button_background; } else { $team_expand_button_background = $button_background_color; }
if ($team_expand_button_color_hover) { $team_expand_button_color_hover = $team_expand_button_color_hover; } else { $team_expand_button_color_hover = $button_hover_color; }
if ($team_expand_button_background_hover) { $team_expand_button_background_hover = $team_expand_button_background_hover; } else { $team_expand_button_background_hover = $button_hover_background_color; }
if ($team_link_hover_color) { $team_link_hover_color = $team_link_hover_color; } else { $team_link_hover_color = $link_hover_color; }
if ($team_block_or_table == "table") { $team_block_or_table = "table"; } else { $team_block_or_table = "block"; }
if ($team_block_padding) { $team_block_padding = $team_block_padding; } else { $team_block_padding = '20'; }
if ($team_border_width) { $team_border_width = $team_border_width; } else { $team_border_width = '0'; };
if ($team_border_color) { $team_border_color = $team_border_color; } else { $team_border_color = 'transparent'; };
if ($team_border_color_left) { $team_border_color_left = $team_border_color_left; } else { $team_border_color_left = $team_border_color; };
if ($team_border_color_top) { $team_border_color_top = $team_border_color_top; } else { $team_border_color_top = $team_border_color; };
if ($team_border_color_right) { $team_border_color_right = $team_border_color_right; } else { $team_border_color_right = $team_border_color; };
if ($team_border_color_bottom) { $team_border_color_bottom = $team_border_color_bottom; } else { $team_border_color_bottom = $team_border_color; };
if ($team_image_border_width) { $team_image_border_width = $team_image_border_width; } else { $team_image_border_width = '0'; };
if ($team_image_border_color) { $team_image_border_color = $team_image_border_color; } else { $team_image_border_color = 'transparent'; };
if ($team_image_border_color_left) { $team_image_border_color_left = $team_image_border_color_left; } else { $team_image_border_color_left = $team_image_border_color; };
if ($team_image_border_color_top) { $team_image_border_color_top = $team_image_border_color_top; } else { $team_image_border_color_top = $team_image_border_color; };
if ($team_image_border_color_right) { $team_image_border_color_right = $team_image_border_color_right; } else { $team_image_border_color_right = $team_image_border_color; };
if ($team_image_border_color_bottom) { $team_image_border_color_bottom = $team_image_border_color_bottom; } else { $team_image_border_color_bottom = $team_image_border_color; };
if ($team_name_border_bottom_width) { $team_name_border_bottom_width = $team_name_border_bottom_width; } else { $team_name_border_bottom_width = '0'; };
if ($team_name_border_bottom_color) { $team_name_border_bottom_color = $team_name_border_bottom_color; } else { $team_name_border_bottom_color = 'transparent'; };


$news_options = get_field('news_options', 'option');
if($news_options) {

	$news_background_color = $news_options['background_color'];
	$news_background_hover_color = $news_options['background_hover_color'];
	$news_post_padding = $news_options['post_padding'];
	$news_border_radius = $news_options['border_radius'];
	$news_border_width = $news_options['border_width'];
	$news_border_color = $news_options['border_color'];
	$news_border_color_top = $news_options['border_color_top'];
	$news_border_color_right = $news_options['border_color_right'];
	$news_border_color_bottom = $news_options['border_color_bottom'];
	$news_border_color_left = $news_options['border_color_left'];
	$news_box_shadow = $news_options['box_shadow'];
	$news_box_shadow_color = $news_options['box_shadow_color'];
	$news_featured_image_border_radius = $news_options['featured_image_border_radius'];
	$news_featured_image_border_width = $news_options['featured_image_border_width'];
	$news_featured_image_border_color = $news_options['featured_image_border_color'];
	$news_featured_image_border_color_top = $news_options['featured_image_border_color_top'];
	$news_featured_image_border_color_right = $news_options['featured_image_border_color_right'];
	$news_featured_image_border_color_bottom = $news_options['featured_image_border_color_bottom'];
	$news_featured_image_border_color_left = $news_options['featured_image_border_color_left'];
	$news_button_text_color = $news_options['button_text_color'];
	$news_button_background_color = $news_options['button_background_color'];
	$news_button_text_color_hover = $news_options['button_text_color_hover'];
	$news_button_background_color_hover = $news_options['button_background_color_hover'];
	$news_title_font = $news_options['title_font'];
	$news_title_color = $news_options['title_color'];
	$news_title_hover_color = $news_options['title_hover_color'];
	$news_title_border_bottom_width = $news_options['title_border_bottom_width'];
	$news_title_border_bottom_color = $news_options['title_border_bottom_color'];
	$news_content_font = $news_options['content_font'];
	$news_content_color = $news_options['content_color'];
	$news_content_hover_color = $news_options['content_hover_color'];
	$news_featured_image_overlay = $news_options['featured_image_overlay'];
	$news_post_date_color = $news_options['post_date_color'];
	$news_post_date_hover_color = $news_options['post_date_hover_color'];
	$news_list_categories_color = $news_options['list_categories_color'];
	$news_list_categories_hover_color = $news_options['list_categories_hover_color'];

	$news_post_date_font = $news_options['post_date_font'];
	$news_post_date_size = $news_options['post_date_size'];
	$news_list_categories_font = $news_options['list_categories_font'];
	$news_list_categories_size = $news_options['list_categories_size'];
	$news_title_font_size = $news_options['title_font_size'];
	$news_content_font_size = $news_options['content_font_size'];

}

if ($news_background_color) { $news_background_color = $news_background_color; } else { $news_background_color = 'transparent'; }
if ($news_background_hover_color) { $news_background_hover_color = $news_background_hover_color; } else { $news_background_hover_color = $news_background_color; }
if ($news_post_padding) { $news_post_padding = $news_post_padding; } else { $news_post_padding = '20'; }

if ($news_border_radius) { $news_border_radius = $news_border_radius; } else { $news_border_radius = '0'; }
if ($news_border_width) { $news_border_width = $news_border_width; } else { $news_border_width = '0'; }
if ($news_border_color) { $news_border_color = $news_border_color; } else { $news_border_color = 'transparent'; }
if ($news_border_color_top) { $news_border_color_top = $news_border_color_top; } else { $news_border_color_top = $news_border_color; }
if ($news_border_color_right) { $news_border_color_right = $news_border_color_right; } else { $news_border_color_right = $news_border_color; }
if ($news_border_color_bottom) { $news_border_color_bottom = $news_border_color_bottom; } else { $news_border_color_bottom = $news_border_color; }
if ($news_border_color_left) { $news_border_color_left = $news_border_color_left; } else { $news_border_color_left = $news_border_color; }

if ($news_box_shadow_color && $news_box_shadow =='Yes') { $news_box_shadow_color = $news_box_shadow_color; } else { $news_box_shadow_color = 'transparent'; }

if ($news_featured_image_overlay) { $news_featured_image_overlay = $news_featured_image_overlay; } else { $news_featured_image_overlay = 'transparent'; }
if ($news_featured_image_border_radius) { $news_featured_image_border_radius = $news_featured_image_border_radius; } else { $news_featured_image_border_radius = '0'; }
if ($news_featured_image_border_width) { $news_featured_image_border_width = $news_featured_image_border_width; } else { $news_featured_image_border_width = '0'; }
if ($news_featured_image_border_color) { $news_featured_image_border_color = $news_featured_image_border_color; } else { $news_featured_image_border_color = 'transparent'; }
if ($news_featured_image_border_color_top) { $news_featured_image_border_color_top = $news_featured_image_border_color_top; } else { $news_featured_image_border_color_top = $news_featured_image_border_color; }
if ($news_featured_image_border_color_right) { $news_featured_image_border_color_right = $news_featured_image_border_color_right; } else { $news_featured_image_border_color_right = $news_featured_image_border_color; }
if ($news_featured_image_border_color_bottom) { $news_featured_image_border_color_bottom = $news_featured_image_border_color_bottom; } else { $news_featured_image_border_color_bottom = $news_featured_image_border_color; }
if ($news_featured_image_border_color_left) { $news_featured_image_border_color_left = $news_featured_image_border_color_left; } else { $news_featured_image_border_color_left = $news_featured_image_border_color; }

if ($news_title_font) { $news_title_font = $news_title_font; } else { $news_title_font = $main_heading_font; }
if ($news_title_color) { $news_title_color = $news_title_color; } else { $news_title_color = $secondary_color; }
if ($news_title_hover_color) { $news_title_hover_color = $news_title_hover_color; } else { $news_title_hover_color = $link_hover_color; }
if ($news_title_border_bottom_width) { $news_title_border_bottom_width = $news_title_border_bottom_width; } else { $news_title_border_bottom_width = '0'; };
if ($news_title_border_bottom_color) { $news_title_border_bottom_color = $news_title_border_bottom_color; } else { $news_title_border_bottom_color = 'transparent'; };

if ($news_content_font) { $news_content_font = $news_content_font; } else { $news_content_font = $primary_font; }
if ($news_content_color) { $news_content_color = $news_content_color; } else { $news_content_color = $primary_site_color; }
if ($news_content_hover_color) { $news_content_hover_color = $news_content_hover_color; } else { $news_content_hover_color = $link_hover_color; }

if ($news_button_text_color) { $news_button_text_color = $news_button_text_color; } else { $news_button_text_color = $button_color; }
if ($news_button_background_color) { $news_button_background_color = $news_button_background_color; } else { $news_button_background_color = $button_background_color; }
if ($news_button_text_color_hover) { $news_button_text_color_hover = $news_button_text_color_hover; } else { $news_button_text_color_hover = $button_hover_color; }
if ($news_button_background_color_hover) { $news_button_background_color_hover = $news_button_background_color_hover; } else { $news_button_background_color_hover = $button_hover_background_color; }

if ($news_post_date_color) { $news_post_date_color = $news_post_date_color; } else { $news_post_date_color = $primary_site_color; }
if ($news_post_date_hover_color) { $news_post_date_hover_color = $news_post_date_hover_color; } else { $news_post_date_hover_color = $link_hover_color; }
if ($news_list_categories_color) { $news_list_categories_color = $news_list_categories_color; } else { $news_list_categories_color = $primary_site_color; }
if ($news_list_categories_hover_color) { $news_list_categories_hover_color = $news_list_categories_hover_color; } else { $news_list_categories_hover_color = $link_hover_color; }

if ($news_post_date_font) { $news_post_date_font = $news_post_date_font; } else { $news_post_date_font = $main_heading_font; }
if ($news_list_categories_font) { $news_list_categories_font = $news_list_categories_font; } else { $news_list_categories_font = $main_heading_font; }

if ($news_title_font_size) { $news_title_font_size_use = $news_title_font_size; $news_title_font_size = $news_title_font_size; } else { $news_title_font_size_use = $heading_3_font_size; $news_title_font_size = $heading_3_font_size; }
$news_title_font_size_use = $news_title_font_size / 10;
if ($news_content_font_size) { $news_content_font_size_use = $news_content_font_size; $news_content_font_size = $news_content_font_size; } else { $news_content_font_size_use = $body_font_size; $news_content_font_size = $body_font_size; }
$news_content_font_size_use = $news_content_font_size / 10;
if ($news_post_date_size) { $news_post_date_size_use = $news_post_date_size; $news_post_date_size = $news_post_date_size; } else { $news_post_date_size_use = $heading_4_font_size; $news_post_date_size = $heading_4_font_size; }
$news_post_date_size_use = $news_post_date_size / 10;
if ($news_list_categories_size) { $news_list_categories_size_use = $news_list_categories_size; $news_list_categories_size = $news_list_categories_size; } else { $news_list_categories_size_use = $heading_6_font_size; $news_list_categories_size = $heading_6_font_size; }
$news_list_categories_size_use = $news_list_categories_size / 10;

$projects_options = get_field('projects_options', 'option');
if($projects_options) {

	$projects_background_color = $projects_options['background_color'];
	$projects_background_hover_color = $projects_options['background_hover_color'];
	$projects_post_padding = $projects_options['post_padding'];
	$projects_border_radius = $projects_options['border_radius'];
	$projects_border_width = $projects_options['border_width'];
	$projects_border_color = $projects_options['border_color'];
	$projects_border_color_top = $projects_options['border_color_top'];
	$projects_border_color_right = $projects_options['border_color_right'];
	$projects_border_color_bottom = $projects_options['border_color_bottom'];
	$projects_border_color_left = $projects_options['border_color_left'];
	$projects_box_shadow = $projects_options['box_shadow'];
	$projects_box_shadow_color = $projects_options['box_shadow_color'];
	$projects_featured_image_border_radius = $projects_options['featured_image_border_radius'];
	$projects_featured_image_border_width = $projects_options['featured_image_border_width'];
	$projects_featured_image_border_color = $projects_options['featured_image_border_color'];
	$projects_featured_image_border_color_top = $projects_options['featured_image_border_color_top'];
	$projects_featured_image_border_color_right = $projects_options['featured_image_border_color_right'];
	$projects_featured_image_border_color_bottom = $projects_options['featured_image_border_color_bottom'];
	$projects_featured_image_border_color_left = $projects_options['featured_image_border_color_left'];
	$projects_button_text_color = $projects_options['button_text_color'];
	$projects_button_background_color = $projects_options['button_background_color'];
	$projects_button_text_color_hover = $projects_options['button_text_color_hover'];
	$projects_button_background_color_hover = $projects_options['button_background_color_hover'];
	$projects_title_font = $projects_options['title_font'];
	$projects_title_color = $projects_options['title_color'];
	$projects_title_hover_color = $projects_options['title_hover_color'];
	$projects_title_border_bottom_width = $projects_options['title_border_bottom_width'];
	$projects_title_border_bottom_color = $projects_options['title_border_bottom_color'];
	$projects_content_font = $projects_options['content_font'];
	$projects_content_color = $projects_options['content_color'];
	$projects_content_hover_color = $projects_options['content_hover_color'];
	$projects_featured_image_overlay = $projects_options['featured_image_overlay'];
	$projects_post_date_color = $projects_options['post_date_color'];
	$projects_post_date_hover_color = $projects_options['post_date_hover_color'];
	$projects_list_categories_color = $projects_options['list_categories_color'];
	$projects_list_categories_hover_color = $projects_options['list_categories_hover_color'];

	$projects_post_date_font = $projects_options['post_date_font'];
	$projects_post_date_size = $projects_options['post_date_size'];
	$projects_list_categories_font = $projects_options['list_categories_font'];
	$projects_list_categories_size = $projects_options['list_categories_size'];
	$projects_title_font_size = $projects_options['title_font_size'];
	$projects_content_font_size = $projects_options['content_font_size'];

}

if ($projects_background_color) { $projects_background_color = $projects_background_color; } else { $projects_background_color = 'transparent'; }
if ($projects_background_hover_color) { $projects_background_hover_color = $projects_background_hover_color; } else { $projects_background_hover_color = $projects_background_color; }
if ($projects_post_padding) { $projects_post_padding = $projects_post_padding; } else { $projects_post_padding = '20'; }

if ($projects_border_radius) { $projects_border_radius = $projects_border_radius; } else { $projects_border_radius = '0'; }
if ($projects_border_width) { $projects_border_width = $projects_border_width; } else { $projects_border_width = '0'; }
if ($projects_border_color) { $projects_border_color = $projects_border_color; } else { $projects_border_color = 'transparent'; }
if ($projects_border_color_top) { $projects_border_color_top = $projects_border_color_top; } else { $projects_border_color_top = $projects_border_color; }
if ($projects_border_color_right) { $projects_border_color_right = $projects_border_color_right; } else { $projects_border_color_right = $projects_border_color; }
if ($projects_border_color_bottom) { $projects_border_color_bottom = $projects_border_color_bottom; } else { $projects_border_color_bottom = $projects_border_color; }
if ($projects_border_color_left) { $projects_border_color_left = $projects_border_color_left; } else { $projects_border_color_left = $projects_border_color; }

if ($projects_box_shadow_color && $projects_box_shadow =='Yes') { $projects_box_shadow_color = $projects_box_shadow_color; } else { $projects_box_shadow_color = 'transparent'; }

if ($projects_featured_image_overlay) { $projects_featured_image_overlay = $projects_featured_image_overlay; } else { $projects_featured_image_overlay = 'transparent'; }
if ($projects_featured_image_border_radius) { $projects_featured_image_border_radius = $projects_featured_image_border_radius; } else { $projects_featured_image_border_radius = '0'; }
if ($projects_featured_image_border_width) { $projects_featured_image_border_width = $projects_featured_image_border_width; } else { $projects_featured_image_border_width = '0'; }
if ($projects_featured_image_border_color) { $projects_featured_image_border_color = $projects_featured_image_border_color; } else { $projects_featured_image_border_color = 'transparent'; }
if ($projects_featured_image_border_color_top) { $projects_featured_image_border_color_top = $projects_featured_image_border_color_top; } else { $projects_featured_image_border_color_top = $projects_featured_image_border_color; }
if ($projects_featured_image_border_color_right) { $projects_featured_image_border_color_right = $projects_featured_image_border_color_right; } else { $projects_featured_image_border_color_right = $projects_featured_image_border_color; }
if ($projects_featured_image_border_color_bottom) { $projects_featured_image_border_color_bottom = $projects_featured_image_border_color_bottom; } else { $projects_featured_image_border_color_bottom = $projects_featured_image_border_color; }
if ($projects_featured_image_border_color_left) { $projects_featured_image_border_color_left = $projects_featured_image_border_color_left; } else { $projects_featured_image_border_color_left = $projects_featured_image_border_color; }

if ($projects_title_font) { $projects_title_font = $projects_title_font; } else { $projects_title_font = $main_heading_font; }
if ($projects_title_color) { $projects_title_color = $projects_title_color; } else { $projects_title_color = $secondary_color; }
if ($projects_title_hover_color) { $projects_title_hover_color = $projects_title_hover_color; } else { $projects_title_hover_color = $link_hover_color; }
if ($projects_title_border_bottom_width) { $projects_title_border_bottom_width = $projects_title_border_bottom_width; } else { $projects_title_border_bottom_width = '0'; };
if ($projects_title_border_bottom_color) { $projects_title_border_bottom_color = $projects_title_border_bottom_color; } else { $projects_title_border_bottom_color = 'transparent'; };

if ($projects_content_font) { $projects_content_font = $projects_content_font; } else { $projects_content_font = $primary_font; }
if ($projects_content_color) { $projects_content_color = $projects_content_color; } else { $projects_content_color = $primary_site_color; }
if ($projects_content_hover_color) { $projects_content_hover_color = $projects_content_hover_color; } else { $projects_content_hover_color = $link_hover_color; }

if ($projects_button_text_color) { $projects_button_text_color = $projects_button_text_color; } else { $projects_button_text_color = $button_color; }
if ($projects_button_background_color) { $projects_button_background_color = $projects_button_background_color; } else { $projects_button_background_color = $button_background_color; }
if ($projects_button_text_color_hover) { $projects_button_text_color_hover = $projects_button_text_color_hover; } else { $projects_button_text_color_hover = $button_hover_color; }
if ($projects_button_background_color_hover) { $projects_button_background_color_hover = $projects_button_background_color_hover; } else { $projects_button_background_color_hover = $button_hover_background_color; }

if ($projects_post_date_color) { $projects_post_date_color = $projects_post_date_color; } else { $projects_post_date_color = $primary_site_color; }
if ($projects_post_date_hover_color) { $projects_post_date_hover_color = $projects_post_date_hover_color; } else { $projects_post_date_hover_color = $link_hover_color; }
if ($projects_list_categories_color) { $projects_list_categories_color = $projects_list_categories_color; } else { $projects_list_categories_color = $primary_site_color; }
if ($projects_list_categories_hover_color) { $projects_list_categories_hover_color = $projects_list_categories_hover_color; } else { $projects_list_categories_hover_color = $link_hover_color; }

if ($projects_post_date_font) { $projects_post_date_font = $projects_post_date_font; } else { $projects_post_date_font = $main_heading_font; }
if ($projects_list_categories_font) { $projects_list_categories_font = $projects_list_categories_font; } else { $projects_list_categories_font = $main_heading_font; }

if ($projects_title_font_size) { $projects_title_font_size_use = $projects_title_font_size; $projects_title_font_size = $projects_title_font_size; } else { $projects_title_font_size_use = $heading_3_font_size; $projects_title_font_size = $heading_3_font_size; }
$projects_title_font_size_use = $projects_title_font_size / 10;
if ($projects_content_font_size) { $projects_content_font_size_use = $projects_content_font_size; $projects_content_font_size = $projects_content_font_size; } else { $projects_content_font_size_use = $body_font_size; $projects_content_font_size = $body_font_size; }
$projects_content_font_size_use = $projects_content_font_size / 10;
if ($projects_post_date_size) { $projects_post_date_size_use = $projects_post_date_size; $projects_post_date_size = $projects_post_date_size; } else { $projects_post_date_size_use = $heading_4_font_size; $projects_post_date_size = $heading_4_font_size; }
$projects_post_date_size_use = $projects_post_date_size / 10;
if ($projects_list_categories_size) { $projects_list_categories_size_use = $projects_list_categories_size; $projects_list_categories_size = $projects_list_categories_size; } else { $projects_list_categories_size_use = $heading_6_font_size; $projects_list_categories_size = $heading_6_font_size; }
$projects_list_categories_size_use = $projects_list_categories_size / 10;

$resource_options = get_field('resource_options', 'option');
if($resource_options) {

	$resource_background_color = $resource_options['background_color'];
	$resource_background_hover_color = $resource_options['background_hover_color'];
	$resource_post_padding = $resource_options['post_padding'];
	$resource_border_radius = $resource_options['border_radius'];
	$resource_border_width = $resource_options['border_width'];
	$resource_border_color = $resource_options['border_color'];
	$resource_border_color_top = $resource_options['border_color_top'];
	$resource_border_color_right = $resource_options['border_color_right'];
	$resource_border_color_bottom = $resource_options['border_color_bottom'];
	$resource_border_color_left = $resource_options['border_color_left'];
	$resource_box_shadow = $resource_options['box_shadow'];
	$resource_box_shadow_color = $resource_options['box_shadow_color'];
	$resource_featured_image_border_radius = $resource_options['featured_image_border_radius'];
	$resource_featured_image_border_width = $resource_options['featured_image_border_width'];
	$resource_featured_image_border_color = $resource_options['featured_image_border_color'];
	$resource_featured_image_border_color_top = $resource_options['featured_image_border_color_top'];
	$resource_featured_image_border_color_right = $resource_options['featured_image_border_color_right'];
	$resource_featured_image_border_color_bottom = $resource_options['featured_image_border_color_bottom'];
	$resource_featured_image_border_color_left = $resource_options['featured_image_border_color_left'];
	$resource_button_text_color = $resource_options['button_text_color'];
	$resource_button_background_color = $resource_options['button_background_color'];
	$resource_button_text_color_hover = $resource_options['button_text_color_hover'];
	$resource_button_background_color_hover = $resource_options['button_background_color_hover'];
	$resource_title_font = $resource_options['title_font'];
	$resource_title_color = $resource_options['title_color'];
	$resource_title_hover_color = $resource_options['title_hover_color'];
	$resource_title_border_bottom_width = $resource_options['title_border_bottom_width'];
	$resource_title_border_bottom_color = $resource_options['title_border_bottom_color'];
	$resource_content_font = $resource_options['content_font'];
	$resource_content_color = $resource_options['content_color'];
	$resource_content_hover_color = $resource_options['content_hover_color'];
	$resource_featured_image_overlay = $resource_options['featured_image_overlay'];
	$resource_post_date_color = $resource_options['post_date_color'];
	$resource_post_date_hover_color = $resource_options['post_date_hover_color'];
	$resource_list_categories_color = $resource_options['list_categories_color'];
	$resource_list_categories_hover_color = $resource_options['list_categories_hover_color'];

	$resource_post_date_font = $resource_options['post_date_font'];
	$resource_post_date_size = $resource_options['post_date_size'];
	$resource_list_categories_font = $resource_options['list_categories_font'];
	$resource_list_categories_size = $resource_options['list_categories_size'];
	$resource_title_font_size = $resource_options['title_font_size'];
	$resource_content_font_size = $resource_options['content_font_size'];

}

if ($resource_background_color) { $resource_background_color = $resource_background_color; } else { $resource_background_color = 'transparent'; }
if ($resource_background_hover_color) { $resource_background_hover_color = $resource_background_hover_color; } else { $resource_background_hover_color = $resource_background_color; }
if ($resource_post_padding) { $resource_post_padding = $resource_post_padding; } else { $resource_post_padding = '20'; }

if ($resource_border_radius) { $resource_border_radius = $resource_border_radius; } else { $resource_border_radius = '0'; }
if ($resource_border_width) { $resource_border_width = $resource_border_width; } else { $resource_border_width = '0'; }
if ($resource_border_color) { $resource_border_color = $resource_border_color; } else { $resource_border_color = 'transparent'; }
if ($resource_border_color_top) { $resource_border_color_top = $resource_border_color_top; } else { $resource_border_color_top = $resource_border_color; }
if ($resource_border_color_right) { $resource_border_color_right = $resource_border_color_right; } else { $resource_border_color_right = $resource_border_color; }
if ($resource_border_color_bottom) { $resource_border_color_bottom = $resource_border_color_bottom; } else { $resource_border_color_bottom = $resource_border_color; }
if ($resource_border_color_left) { $resource_border_color_left = $resource_border_color_left; } else { $resource_border_color_left = $resource_border_color; }

if ($resource_box_shadow_color && $resource_box_shadow =='Yes') { $resource_box_shadow_color = $resource_box_shadow_color; } else { $resource_box_shadow_color = 'transparent'; }

if ($resource_featured_image_overlay) { $resource_featured_image_overlay = $resource_featured_image_overlay; } else { $resource_featured_image_overlay = 'transparent'; }
if ($resource_featured_image_border_radius) { $resource_featured_image_border_radius = $resource_featured_image_border_radius; } else { $resource_featured_image_border_radius = '0'; }
if ($resource_featured_image_border_width) { $resource_featured_image_border_width = $resource_featured_image_border_width; } else { $resource_featured_image_border_width = '0'; }
if ($resource_featured_image_border_color) { $resource_featured_image_border_color = $resource_featured_image_border_color; } else { $resource_featured_image_border_color = 'transparent'; }
if ($resource_featured_image_border_color_top) { $resource_featured_image_border_color_top = $resource_featured_image_border_color_top; } else { $resource_featured_image_border_color_top = $resource_featured_image_border_color; }
if ($resource_featured_image_border_color_right) { $resource_featured_image_border_color_right = $resource_featured_image_border_color_right; } else { $resource_featured_image_border_color_right = $resource_featured_image_border_color; }
if ($resource_featured_image_border_color_bottom) { $resource_featured_image_border_color_bottom = $resource_featured_image_border_color_bottom; } else { $resource_featured_image_border_color_bottom = $resource_featured_image_border_color; }
if ($resource_featured_image_border_color_left) { $resource_featured_image_border_color_left = $resource_featured_image_border_color_left; } else { $resource_featured_image_border_color_left = $resource_featured_image_border_color; }

if ($resource_title_font) { $resource_title_font = $resource_title_font; } else { $resource_title_font = $main_heading_font; }
if ($resource_title_color) { $resource_title_color = $resource_title_color; } else { $resource_title_color = $secondary_color; }
if ($resource_title_hover_color) { $resource_title_hover_color = $resource_title_hover_color; } else { $resource_title_hover_color = $link_hover_color; }
if ($resource_title_border_bottom_width) { $resource_title_border_bottom_width = $resource_title_border_bottom_width; } else { $resource_title_border_bottom_width = '0'; };
if ($resource_title_border_bottom_color) { $resource_title_border_bottom_color = $resource_title_border_bottom_color; } else { $resource_title_border_bottom_color = 'transparent'; };

if ($resource_content_font) { $resource_content_font = $resource_content_font; } else { $resource_content_font = $primary_font; }
if ($resource_content_color) { $resource_content_color = $resource_content_color; } else { $resource_content_color = $primary_site_color; }
if ($resource_content_hover_color) { $resource_content_hover_color = $resource_content_hover_color; } else { $resource_content_hover_color = $link_hover_color; }

if ($resource_button_text_color) { $resource_button_text_color = $resource_button_text_color; } else { $resource_button_text_color = $button_color; }
if ($resource_button_background_color) { $resource_button_background_color = $resource_button_background_color; } else { $resource_button_background_color = $button_background_color; }
if ($resource_button_text_color_hover) { $resource_button_text_color_hover = $resource_button_text_color_hover; } else { $resource_button_text_color_hover = $button_hover_color; }
if ($resource_button_background_color_hover) { $resource_button_background_color_hover = $resource_button_background_color_hover; } else { $resource_button_background_color_hover = $button_hover_background_color; }

if ($resource_post_date_color) { $resource_post_date_color = $resource_post_date_color; } else { $resource_post_date_color = $primary_site_color; }
if ($resource_post_date_hover_color) { $resource_post_date_hover_color = $resource_post_date_hover_color; } else { $resource_post_date_hover_color = $link_hover_color; }
if ($resource_list_categories_color) { $resource_list_categories_color = $resource_list_categories_color; } else { $resource_list_categories_color = $primary_site_color; }
if ($resource_list_categories_hover_color) { $resource_list_categories_hover_color = $resource_list_categories_hover_color; } else { $resource_list_categories_hover_color = $link_hover_color; }

if ($resource_post_date_font) { $resource_post_date_font = $resource_post_date_font; } else { $resource_post_date_font = $main_heading_font; }
if ($resource_list_categories_font) { $resource_list_categories_font = $resource_list_categories_font; } else { $resource_list_categories_font = $main_heading_font; }

if ($resource_title_font_size) { $resource_title_font_size_use = $resource_title_font_size; $resource_title_font_size = $resource_title_font_size; } else { $resource_title_font_size_use = $heading_3_font_size; $resource_title_font_size = $heading_3_font_size; }
$resource_title_font_size_use = $resource_title_font_size / 10;
if ($resource_content_font_size) { $resource_content_font_size_use = $resource_content_font_size; $resource_content_font_size = $resource_content_font_size; } else { $resource_content_font_size_use = $body_font_size; $resource_content_font_size = $body_font_size; }
$resource_content_font_size_use = $resource_content_font_size / 10;
if ($resource_post_date_size) { $resource_post_date_size_use = $resource_post_date_size; $resource_post_date_size = $resource_post_date_size; } else { $resource_post_date_size_use = $heading_4_font_size; $resource_post_date_size = $heading_4_font_size; }
$resource_post_date_size_use = $resource_post_date_size / 10;
if ($resource_list_categories_size) { $resource_list_categories_size_use = $resource_list_categories_size; $resource_list_categories_size = $resource_list_categories_size; } else { $resource_list_categories_size_use = $heading_6_font_size; $resource_list_categories_size = $heading_6_font_size; }
$resource_list_categories_size_use = $resource_list_categories_size / 10;
		
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

	--team_background_color: <?php echo $team_background_color; ?>;
	--team_divider_line_color: <?php echo $team_divider_line_color; ?>;
	--team_border_radius: <?php echo $team_border_radius; ?>px;
	--team_box_shadow_color: <?php echo $team_box_shadow_color; ?>;
	--team_image_border_radius: <?php echo $team_image_border_radius; ?>%;
	--team_name_font: <?php echo $team_name_font; ?>;
	--team_name_color: <?php echo $team_name_color; ?>;
	--team_content_font: <?php echo $team_content_font; ?>;
	--team_content_color: <?php echo $team_content_color; ?>;
	--team_expand_button_color: <?php echo $team_expand_button_color; ?>;
	--team_expand_button_background: <?php echo $team_expand_button_background; ?>;
	--team_expand_button_color_hover: <?php echo $team_expand_button_color_hover; ?>;
	--team_expand_button_background_hover: <?php echo $team_expand_button_background_hover; ?>;
	--team_link_hover_color: <?php echo $team_link_hover_color; ?>;
	--team_block_or_table: <?php echo $team_block_or_table; ?>;

	--team_block_padding: <?php echo $team_block_padding; ?>px;
	--team_border_width: <?php echo $team_border_width; ?>px;
	--team_border_color: <?php echo $team_border_color; ?>;
	--team_border_color_top: <?php echo $team_border_color_top; ?>;
	--team_border_color_right: <?php echo $team_border_color_right; ?>;
	--team_border_color_bottom: <?php echo $team_border_color_bottom; ?>;
	--team_border_color_left: <?php echo $team_border_color_left; ?>;
	--team_image_border_width: <?php echo $team_image_border_width; ?>px;
	--team_image_border_color: <?php echo $team_image_border_color; ?>;
	--team_image_border_color_top: <?php echo $team_image_border_color_top; ?>;
	--team_image_border_color_right: <?php echo $team_image_border_color_right; ?>;
	--team_image_border_color_bottom: <?php echo $team_image_border_color_bottom; ?>;
	--team_image_border_color_left: <?php echo $team_image_border_color_left; ?>;
	--team_name_border_bottom_width: <?php echo $team_name_border_bottom_width; ?>px;
	--team_name_border_bottom_color: <?php echo $team_name_border_bottom_color; ?>;
	
	--news_background_color: <?php echo $news_background_color; ?>;
	--news_background_hover_color: <?php echo $news_background_hover_color; ?>;
	--news_post_padding: <?php echo $news_post_padding; ?>px;

	--news_border_radius: <?php echo $news_border_radius; ?>px;
	--news_border_width: <?php echo $news_border_width; ?>px;
	--news_border_color: <?php echo $news_border_color; ?>;
	--news_border_color_top: <?php echo $news_border_color_top; ?>;
	--news_border_color_right: <?php echo $news_border_color_right; ?>;
	--news_border_color_bottom: <?php echo $news_border_color_bottom; ?>;
	--news_border_color_left: <?php echo $news_border_color_left; ?>;
	--news_box_shadow_color: <?php echo $news_box_shadow_color; ?>;
	
	--news_featured_image_border_radius: <?php echo $news_featured_image_border_radius; ?>%;
	--news_featured_image_border_width: <?php echo $news_featured_image_border_width; ?>px;
	--news_featured_image_overlay: <?php echo $news_featured_image_overlay; ?>;
	--news_featured_image_border_color: <?php echo $news_featured_image_border_color; ?>;
	--news_featured_image_border_color_top: <?php echo $news_featured_image_border_color_top; ?>;
	--news_featured_image_border_color_right: <?php echo $news_featured_image_border_color_right; ?>;
	--news_featured_image_border_color_bottom: <?php echo $news_featured_image_border_color_bottom; ?>;
	--news_featured_image_border_color_left: <?php echo $news_featured_image_border_color_left; ?>;

	--news_button_text_color: <?php echo $news_button_text_color; ?>;
	--news_button_background_color: <?php echo $news_button_background_color; ?>;
	--news_button_text_color_hover: <?php echo $news_button_text_color_hover; ?>;
	--news_button_background_color_hover: <?php echo $news_button_background_color_hover; ?>;
	
	--news_title_font: <?php echo $news_title_font; ?>;
	--news_title_color: <?php echo $news_title_color; ?>;
	--news_title_hover_color: <?php echo $news_title_hover_color; ?>;
	--news_title_border_bottom_width: <?php echo $news_title_border_bottom_width; ?>px;
	--news_title_border_bottom_color: <?php echo $news_title_border_bottom_color; ?>;

	--news_content_font: <?php echo $news_content_font; ?>;
	--news_content_color: <?php echo $news_content_color; ?>;
	--news_content_hover_color: <?php echo $news_content_hover_color; ?>;
	
	--news_post_date_color: <?php echo $news_post_date_color; ?>;
	--news_post_date_hover_color: <?php echo $news_post_date_hover_color; ?>;
	--news_list_categories_color: <?php echo $news_list_categories_color; ?>;
	--news_list_categories_hover_color: <?php echo $news_list_categories_hover_color; ?>;

	--news_title_font_size: <?php echo $news_title_font_size_use; ?>rem;
	--news_title_font_size_admin: <?php echo $news_title_font_size; ?>px;
	--news_content_font_size: <?php echo $news_content_font_size_use; ?>rem;
	--news_content_font_size_admin: <?php echo $news_content_font_size; ?>px;
	--news_post_date_size: <?php echo $news_post_date_size_use; ?>rem;
	--news_post_date_size_admin: <?php echo $news_post_date_size; ?>px;
	--news_list_categories_size: <?php echo $news_list_categories_size_use; ?>rem;
	--news_list_categories_size_admin: <?php echo $news_list_categories_size; ?>px;

	--news_post_date_font: <?php echo $news_post_date_font; ?>;
	--news_list_categories_font: <?php echo $news_list_categories_font; ?>;
	
	--projects_background_color: <?php echo $projects_background_color; ?>;
	--projects_background_hover_color: <?php echo $projects_background_hover_color; ?>;
	--projects_post_padding: <?php echo $projects_post_padding; ?>px;

	--projects_border_radius: <?php echo $projects_border_radius; ?>px;
	--projects_border_width: <?php echo $projects_border_width; ?>px;
	--projects_border_color: <?php echo $projects_border_color; ?>;
	--projects_border_color_top: <?php echo $projects_border_color_top; ?>;
	--projects_border_color_right: <?php echo $projects_border_color_right; ?>;
	--projects_border_color_bottom: <?php echo $projects_border_color_bottom; ?>;
	--projects_border_color_left: <?php echo $projects_border_color_left; ?>;
	--projects_box_shadow_color: <?php echo $projects_box_shadow_color; ?>;
	
	--projects_featured_image_border_radius: <?php echo $projects_featured_image_border_radius; ?>%;
	--projects_featured_image_border_width: <?php echo $projects_featured_image_border_width; ?>px;
	--projects_featured_image_overlay: <?php echo $projects_featured_image_overlay; ?>;
	--projects_featured_image_border_color: <?php echo $projects_featured_image_border_color; ?>;
	--projects_featured_image_border_color_top: <?php echo $projects_featured_image_border_color_top; ?>;
	--projects_featured_image_border_color_right: <?php echo $projects_featured_image_border_color_right; ?>;
	--projects_featured_image_border_color_bottom: <?php echo $projects_featured_image_border_color_bottom; ?>;
	--projects_featured_image_border_color_left: <?php echo $projects_featured_image_border_color_left; ?>;

	--projects_button_text_color: <?php echo $projects_button_text_color; ?>;
	--projects_button_background_color: <?php echo $projects_button_background_color; ?>;
	--projects_button_text_color_hover: <?php echo $projects_button_text_color_hover; ?>;
	--projects_button_background_color_hover: <?php echo $projects_button_background_color_hover; ?>;
	
	--projects_title_font: <?php echo $projects_title_font; ?>;
	--projects_title_color: <?php echo $projects_title_color; ?>;
	--projects_title_hover_color: <?php echo $projects_title_hover_color; ?>;
	--projects_title_border_bottom_width: <?php echo $projects_title_border_bottom_width; ?>px;
	--projects_title_border_bottom_color: <?php echo $projects_title_border_bottom_color; ?>;

	--projects_content_font: <?php echo $projects_content_font; ?>;
	--projects_content_color: <?php echo $projects_content_color; ?>;
	--projects_content_hover_color: <?php echo $projects_content_hover_color; ?>;
	
	--projects_post_date_color: <?php echo $projects_post_date_color; ?>;
	--projects_post_date_hover_color: <?php echo $projects_post_date_hover_color; ?>;
	--projects_list_categories_color: <?php echo $projects_list_categories_color; ?>;
	--projects_list_categories_hover_color: <?php echo $projects_list_categories_hover_color; ?>;

	--projects_title_font_size: <?php echo $projects_title_font_size_use; ?>rem;
	--projects_title_font_size_admin: <?php echo $projects_title_font_size; ?>px;
	--projects_content_font_size: <?php echo $projects_content_font_size_use; ?>rem;
	--projects_content_font_size_admin: <?php echo $projects_content_font_size; ?>px;
	--projects_post_date_size: <?php echo $projects_post_date_size_use; ?>rem;
	--projects_post_date_size_admin: <?php echo $projects_post_date_size; ?>px;
	--projects_list_categories_size: <?php echo $projects_list_categories_size_use; ?>rem;
	--projects_list_categories_size_admin: <?php echo $projects_list_categories_size; ?>px;

	--projects_post_date_font: <?php echo $projects_post_date_font; ?>;
	--projects_list_categories_font: <?php echo $projects_list_categories_font; ?>;

	--container_width: <?php echo $container_width; ?>px;
	--home_container_width: <?php echo $home_container_width; ?>px;
	--headerfooter_container_width: <?php echo $headerfooter_container_width; ?>px;
	
	--resource_background_color: <?php echo $resource_background_color; ?>;
	--resource_background_hover_color: <?php echo $resource_background_hover_color; ?>;
	--resource_post_padding: <?php echo $resource_post_padding; ?>px;

	--resource_border_radius: <?php echo $resource_border_radius; ?>px;
	--resource_border_width: <?php echo $resource_border_width; ?>px;
	--resource_border_color: <?php echo $resource_border_color; ?>;
	--resource_border_color_top: <?php echo $resource_border_color_top; ?>;
	--resource_border_color_right: <?php echo $resource_border_color_right; ?>;
	--resource_border_color_bottom: <?php echo $resource_border_color_bottom; ?>;
	--resource_border_color_left: <?php echo $resource_border_color_left; ?>;
	--resource_box_shadow_color: <?php echo $resource_box_shadow_color; ?>;
	
	--resource_featured_image_border_radius: <?php echo $resource_featured_image_border_radius; ?>%;
	--resource_featured_image_border_width: <?php echo $resource_featured_image_border_width; ?>px;
	--resource_featured_image_overlay: <?php echo $resource_featured_image_overlay; ?>;
	--resource_featured_image_border_color: <?php echo $resource_featured_image_border_color; ?>;
	--resource_featured_image_border_color_top: <?php echo $resource_featured_image_border_color_top; ?>;
	--resource_featured_image_border_color_right: <?php echo $resource_featured_image_border_color_right; ?>;
	--resource_featured_image_border_color_bottom: <?php echo $resource_featured_image_border_color_bottom; ?>;
	--resource_featured_image_border_color_left: <?php echo $resource_featured_image_border_color_left; ?>;

	--resource_button_text_color: <?php echo $resource_button_text_color; ?>;
	--resource_button_background_color: <?php echo $resource_button_background_color; ?>;
	--resource_button_text_color_hover: <?php echo $resource_button_text_color_hover; ?>;
	--resource_button_background_color_hover: <?php echo $resource_button_background_color_hover; ?>;
	
	--resource_title_font: <?php echo $resource_title_font; ?>;
	--resource_title_color: <?php echo $resource_title_color; ?>;
	--resource_title_hover_color: <?php echo $resource_title_hover_color; ?>;
	--resource_title_border_bottom_width: <?php echo $resource_title_border_bottom_width; ?>px;
	--resource_title_border_bottom_color: <?php echo $resource_title_border_bottom_color; ?>;

	--resource_content_font: <?php echo $resource_content_font; ?>;
	--resource_content_color: <?php echo $resource_content_color; ?>;
	--resource_content_hover_color: <?php echo $resource_content_hover_color; ?>;
	
	--resource_post_date_color: <?php echo $resource_post_date_color; ?>;
	--resource_post_date_hover_color: <?php echo $resource_post_date_hover_color; ?>;
	--resource_list_categories_color: <?php echo $resource_list_categories_color; ?>;
	--resource_list_categories_hover_color: <?php echo $resource_list_categories_hover_color; ?>;

	--resource_title_font_size: <?php echo $resource_title_font_size_use; ?>rem;
	--resource_title_font_size_admin: <?php echo $resource_title_font_size; ?>px;
	--resource_content_font_size: <?php echo $resource_content_font_size_use; ?>rem;
	--resource_content_font_size_admin: <?php echo $resource_content_font_size; ?>px;
	--resource_post_date_size: <?php echo $resource_post_date_size_use; ?>rem;
	--resource_post_date_size_admin: <?php echo $resource_post_date_size; ?>px;
	--resource_list_categories_size: <?php echo $resource_list_categories_size_use; ?>rem;
	--resource_list_categories_size_admin: <?php echo $resource_list_categories_size; ?>px;

	--resource_post_date_font: <?php echo $resource_post_date_font; ?>;
	--resource_list_categories_font: <?php echo $resource_list_categories_font; ?>;
}
</style>
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
}
</style>

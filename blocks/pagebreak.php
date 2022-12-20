

	<?php $full_width = ('Full Width' == get_field('page_break_style')); ?>
	<?php $left_img = ('Left Image' == get_field('page_break_style')); ?>
	<?php $right_img = ('Right Image' == get_field('page_break_style')); ?>

	<?php $background_color = esc_html(get_field("background_color")); ?>
	<?php $page_break_background = esc_html(get_field("page_break_background")); ?>
	<?php $additional_pagebreak_classes = get_field("additional_pagebreak_classes"); ?>

	<?php $background_image_alignment = get_field("background_image_alignment");
	if($background_image_alignment) { $background_image_alignment = $background_image_alignment; } else { $background_image_alignment = '#eee'; } ?>

	<?php $container_option = get_field("container_option"); ?>
	<?php $border_top_width = get_field("border-top_width"); ?>
	<?php $border_top_color = get_field("border-top_color"); ?>
	<?php $border_bottom_width = get_field("border-bottom_width"); ?>
	<?php $border_bottom_color = get_field("border-bottom_color"); ?>
	
	<?php $image_border_radius = get_field("image_border_radius"); ?>

	<?php $pagebreak_background_color = (get_field('pagebreak_background_color', 'option'));
if($pagebreak_background_color) { $pagebreak_background_color = $pagebreak_background_color; } else { $pagebreak_background_color = '#eee'; } ?>

<?php $fixed_pagebreak_background = (get_field('fixed_position_background'));
if ($fixed_pagebreak_background == "Yes") {
	$pagebreak_background_attachment = "background-attachment:fixed;";
} else {
	$pagebreak_background_attachment = "";
} ?>
<?php if ($container_option == "no") { 
	$container_class = "no-container";
} else {
	$container_class = "container";
} ?>

<?php if ($border_top_width) { 
	$border_top_width = $border_top_width.'px';
} else {
	$border_top_width = "0px";
} ?>
<?php if ($border_top_color) { 
	$border_top_color = $border_top_color;
} else {
	$border_top_color = "transparent";
} ?>
<?php if ($border_bottom_width) { 
	$border_bottom_width = $border_bottom_width.'px';
} else {
	$border_bottom_width = "0px";
} ?>
<?php if ($border_bottom_color) { 
	$border_bottom_color = $border_bottom_color;
} else {
	$border_bottom_color = "transparent";
} ?>

<?php if ($image_border_radius && ($additional_pagebreak_classes == "overlap")) { 
	$image_border_radius = $image_border_radius.'px';
} else {
	$image_border_radius = "0px";
} ?>

<?php if (is_admin()) { ?>	
	<h2 class="h5 center" style="border-top:1px dashed #ddd;padding-top:10px;border-bottom:1px dashed #ddd;padding-bottom:10px;">-- Your pagebreak content will START here. --</h2>
<?php } else { ?>

	</div>
	</div>
	</div>
	</div>
			
<?php } ?>

	<?php if ($full_width) { ?>

		<?php if ($background_color && !$page_break_background) { ?>
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } elseif($page_break_background) { ?>
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-image:url(<?php echo $page_break_background; ?>);<?php echo $pagebreak_background_attachment; ?>border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;background-position: <?php echo $background_image_alignment; ?>;">
		<?php } else { ?>
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $pagebreak_background_color; ?>;border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } ?>
			<?php if ($background_color && $page_break_background) { ?>
				<div class="pagebreak_inner" style="background-color:<?php echo $background_color; ?>;" <?php if ($additional_pagebreak_classes) { ?>class="<?php echo $additional_pagebreak_classes; ?>"<?php } ?>></div>
			<?php } elseif($page_break_background) { ?>
				<div class="pagebreak_inner" style="background-color:<?php echo $pagebreak_background_color; ?>;" <?php if ($additional_pagebreak_classes) { ?>class="<?php echo $additional_pagebreak_classes; ?>"<?php } ?>></div>
			<?php } ?>
			<div class="<?php echo $container_class; ?>"> 
				<div class="row">
					<div class="col-md-12">

	<?php } elseif ($left_img) { ?>

		<?php if ($additional_pagebreak_classes == "overlap") { ?>
		<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
		<?php } elseif ($background_color) { ?>
		<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } else { ?>
		<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } ?>
			<?php if ($background_color && !$page_break_background) { ?>
			<div class="pagebreak_left_img" style="background-color:<?php echo $background_color; ?>;border-radius: 0px <?php echo $image_border_radius; ?> <?php echo $image_border_radius; ?> 0px;"></div>
			<?php } elseif($page_break_background) { ?>
			<div class="pagebreak_left_img" style="background-image:url(<?php echo $page_break_background; ?>);border-radius: 0px <?php echo $image_border_radius; ?> <?php echo $image_border_radius; ?> 0px;background-position: <?php echo $background_image_alignment; ?>;"></div>
			<?php } else { ?>
			<div class="pagebreak_left_img" style="background-color:<?php echo $pagebreak_background_color; ?>;border-radius: 0px <?php echo $image_border_radius; ?> <?php echo $image_border_radius; ?> 0px;"></div>
			<?php } ?>
			<?php if ($additional_pagebreak_classes == "overlap") { ?>
			<div class="pagebreak_left_content" style="background-color:<?php echo $background_color; ?>;border-radius: <?php echo $image_border_radius; ?> 0px 0px <?php echo $image_border_radius; ?>;">
			<?php } else { ?>
			<div class="pagebreak_left_content">
			<?php } ?>
				<div class="<?php echo $container_class; ?>">
					<div class="pagebreak_container_inner">

	<?php } elseif ($right_img) { ?>

		<?php if ($additional_pagebreak_classes == "overlap") { ?>
		<div class="pagebreak pagebreak_right <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
		<?php } elseif ($background_color) { ?>
		<div class="pagebreak pagebreak_right  <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } else { ?>
		<div class="pagebreak pagebreak_right <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="border-top:<?php echo $border_top_width; ?> solid <?php echo $border_top_color; ?>;border-bottom:<?php echo $border_bottom_width; ?> solid <?php echo $border_bottom_color; ?>;">
		<?php } ?>
			<?php if ($background_color && !$page_break_background) { ?>
			<div class="pagebreak_right_img" style="background-color:<?php echo $background_color; ?>;border-radius: <?php echo $image_border_radius; ?> 0px 0px <?php echo $image_border_radius; ?>;"></div>
			<?php } elseif($page_break_background) { ?>
			<div class="pagebreak_right_img" style="background-image:url(<?php echo $page_break_background; ?>);border-radius: <?php echo $image_border_radius; ?> 0px 0px <?php echo $image_border_radius; ?>;background-position: <?php echo $background_image_alignment; ?>;"></div>
			<?php } else { ?>
			<div class="pagebreak_right_img" style="background-color:<?php echo $pagebreak_background_color; ?>;border-radius: <?php echo $image_border_radius; ?> 0px 0px <?php echo $image_border_radius; ?>;"></div>
			<?php } ?>
			<?php if ($additional_pagebreak_classes == "overlap") { ?>
			<div class="pagebreak_right_content" style="background-color:<?php echo $background_color; ?>;border-radius: 0px <?php echo $image_border_radius; ?> <?php echo $image_border_radius; ?> 0px;">
			<?php } else { ?>
			<div class="pagebreak_right_content">
			<?php } ?>
				<div class="<?php echo $container_class; ?>">
					<div class="pagebreak_container_inner">
	<?php } ?>

	<?php if (is_admin()) { ?>
		<h2 class="h5">This is a preview of your pagebreak content.</h2>
	<?php } ?>
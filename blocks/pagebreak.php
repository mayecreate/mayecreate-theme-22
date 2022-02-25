

	<?php $full_width = ('Full Width' == get_field('page_break_style')); ?>
	<?php $left_img = ('Left Image' == get_field('page_break_style')); ?>
	<?php $right_img = ('Right Image' == get_field('page_break_style')); ?>

	<?php $background_color = esc_html(get_field("background_color")); ?>
	<?php $page_break_background = esc_html(get_field("page_break_background")); ?>
	<?php $additional_pagebreak_classes = get_field("additional_pagebreak_classes"); ?>

	<?php $pagebreak_background_color = (get_field('pagebreak_background_color', 'option'));
if($pagebreak_background_color) { $pagebreak_background_color = $pagebreak_background_color; } else { $pagebreak_background_color = '#eee'; } ?>

<?php $fixed_pagebreak_background = (get_field('fixed_position_background'));
if ($fixed_pagebreak_background == "Yes") {
	$pagebreak_background_attachment = "background-attachment:fixed;";
} else {
	$pagebreak_background_attachment = "";
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
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
		<?php } elseif($page_break_background) { ?>
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-image:url(<?php echo $page_break_background; ?>);<?php echo $pagebreak_background_attachment; ?>">
		<?php } else { ?>
		<div class="pagebreak <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $pagebreak_background_color; ?>;">
		<?php } ?>
			<?php if ($background_color && $page_break_background) { ?>
				<div class="pagebreak_inner" style="background-color:<?php echo $background_color; ?>;" <?php if ($additional_pagebreak_classes) { ?>class="<?php echo $additional_pagebreak_classes; ?>"<?php } ?>></div>
			<?php } elseif($page_break_background) { ?>
				<div class="pagebreak_inner" style="background-color:<?php echo $pagebreak_background_color; ?>;" <?php if ($additional_pagebreak_classes) { ?>class="<?php echo $additional_pagebreak_classes; ?>"<?php } ?>></div>
			<?php } ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

	<?php } elseif ($left_img) { ?>

		<?php if ($background_color) { ?>
		<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
		<?php } else { ?>
		<div class="pagebreak pagebreak_left <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
		<?php } ?>
			<?php if ($background_color && !$page_break_background) { ?>
			<div class="pagebreak_left_img" style="background-color:<?php echo $background_color; ?>;"></div>
			<?php } elseif($page_break_background) { ?>
			<div class="pagebreak_left_img" style="background-image:url(<?php echo $page_break_background; ?>);"></div>
			<?php } else { ?>
			<div class="pagebreak_left_img" style="background-color:<?php echo $pagebreak_background_color; ?>;"></div>
			<?php } ?>
			<div class="pagebreak_left_content">
				<div class="container">
					<div class="pagebreak_container_inner">

	<?php } elseif ($right_img) { ?>

		<?php if ($background_color) { ?>
		<div class="pagebreak pagebreak_right  <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>" style="background-color:<?php echo $background_color; ?>;">
		<?php } else { ?>
		<div class="pagebreak pagebreak_right <?php if ($additional_pagebreak_classes) { echo $additional_pagebreak_classes; } ?>">
		<?php } ?>
			<?php if ($background_color && !$page_break_background) { ?>
			<div class="pagebreak_right_img" style="background-color:<?php echo $background_color; ?>;"></div>
			<?php } elseif($page_break_background) { ?>
			<div class="pagebreak_right_img" style="background-image:url(<?php echo $page_break_background; ?>);"></div>
			<?php } else { ?>
			<div class="pagebreak_right_img" style="background-color:<?php echo $pagebreak_background_color; ?>;"></div>
			<?php } ?>
			<div class="pagebreak_right_content">
				<div class="container">
					<div class="pagebreak_container_inner">
	<?php } ?>

	<?php if (is_admin()) { ?>
		<h2 class="h5">This is a preview of your pagebreak content.</h2>
	<?php } ?>
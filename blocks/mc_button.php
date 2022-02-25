<?php $button_text = esc_html(get_field("button_text")); ?>
<?php $button_link = esc_html(get_field("button_link")); ?>

<?php $large_button = ('Large' == get_field('button_type')); ?>
<?php $_blank = ('_blank' == get_field('target')); ?>
<?php $block = ('block' == get_field('additional_class_options')); ?>
<?php $center = ('center' == get_field('additional_class_options')); ?>

<?php $custom_text_color = esc_html(get_field("custom_text_color")); ?>
<?php $custom_background_color = esc_html(get_field("custom_background_color")); ?>
<?php $custom_text_hover_color = esc_html(get_field("custom_text_hover_color")); ?>
<?php $custom_background_hover_color = esc_html(get_field("custom_background_hover_color")); ?>

<?php if ($custom_text_color || $custom_background_color || $custom_text_hover_color || $custom_background_hover_color) {
    $custom_color_class = 'custom_color';
} else {
    $custom_color_class = '';
} ?>
<?php if ($custom_text_color || $custom_background_color || $custom_text_hover_color || $custom_background_hover_color) { ?>
    <style type="text/css">
        .custom_color, .custom_color:link, .custom_color:visited {
            background: <?php echo $custom_background_color; ?> !important;
            color: <?php echo $custom_text_color; ?> !important;
            border-color: <?php echo $custom_background_color; ?> !important;
        }
        .custom_color:hover, .custom_color:active {
            background: <?php echo $custom_background_hover_color; ?> !important;
            color: <?php echo $custom_text_hover_color; ?> !important;
            border-color: <?php echo $custom_background_hover_color; ?> !important;
        }
    </style>
<?php } ?>

<?php if( have_rows('custom_margin') ): ?>
    <?php while( have_rows('custom_margin') ): the_row(); 
        // Get sub field values.
        $unit_of_measurement = get_sub_field('unit_of_measurement');
        $margin_top = get_sub_field('margin_top');
        $margin_right = get_sub_field('margin_right');
        $margin_bottom = get_sub_field('margin_bottom');
        $margin_left = get_sub_field('margin_left');
        if ($margin_top || $margin_right || $margin_bottom || $margin_left) {
            $custom_margin_class = 'custom_margin_class';

            ?>
            <style type="text/css">
                .btn-mayecreate.custom_margin_class, a.btn-mayecreate.custom_margin_class:link, a.btn-mayecreate.custom_margin_class:visited {
                    margin-top: <?php echo $margin_top; ?><?php echo $unit_of_measurement; ?> !important;
                    margin-right: <?php echo $margin_right; ?><?php echo $unit_of_measurement; ?> !important;
                    margin-bottom: <?php echo $margin_bottom; ?><?php echo $unit_of_measurement; ?> !important;
                    margin-left: <?php echo $margin_left; ?><?php echo $unit_of_measurement; ?> !important;
                }
            </style>
        <?php } ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('custom_padding') ): ?>
    <?php while( have_rows('custom_padding') ): the_row(); 
        // Get sub field values.
        $unit_of_measurement = get_sub_field('unit_of_measurement');
        $padding_top = get_sub_field('padding_top');
        $padding_right = get_sub_field('padding_right');
        $padding_bottom = get_sub_field('padding_bottom');
        $padding_left = get_sub_field('padding_left');
        if ($padding_top || $padding_right || $padding_bottom || $padding_left) {
            $custom_padding_class = 'custom_padding_class';

            ?>
            <style type="text/css">
                .btn-mayecreate.custom_padding_class, a.btn-mayecreate.custom_padding_class:link, a.btn-mayecreate.custom_padding_class:visited {
                    padding-top: <?php echo $padding_top; ?><?php echo $unit_of_measurement; ?> !important;
                    padding-right: <?php echo $padding_right; ?><?php echo $unit_of_measurement; ?> !important;
                    padding-bottom: <?php echo $padding_bottom; ?><?php echo $unit_of_measurement; ?> !important;
                    padding-left: <?php echo $padding_left; ?><?php echo $unit_of_measurement; ?> !important;
                }
            </style>
        <?php } ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if (is_admin()) { ?>
    <span class="btn-mayecreate<?php if ($large_button) { ?> large<?php } ?><?php if (in_array('block', get_field('additional_class_options'))) { ?> block<?php } ?><?php if (in_array('center', get_field('additional_class_options'))) { ?> center<?php } ?> <?php echo $custom_color_class; ?> <?php echo $custom_margin_class; ?> <?php echo $custom_padding_class; ?>">
<?php } else { ?>
    <a class="btn-mayecreate<?php if ($large_button) { ?> large<?php } ?><?php if (in_array('block', get_field('additional_class_options'))) { ?> block<?php } ?><?php if (in_array('center', get_field('additional_class_options'))) { ?> center<?php } ?> <?php echo $custom_color_class; ?> <?php echo $custom_margin_class; ?> <?php echo $custom_padding_class; ?>" href="<?php echo $button_link; ?>" <?php if ($_blank) { ?> target="_blank" <?php } ?>>
<?php } ?>
    <?php echo $button_text; ?></a> 
<?php if (is_admin()) { ?>
    </span> 
<?php } else { ?>
    </a> 
<?php } ?>
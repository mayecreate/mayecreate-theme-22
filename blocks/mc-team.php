<?php $team_id = generateRandomString(); ?>
<?php
$team_options = get_field('team_options', 'option');
if($team_options) { ?>

        <?php $layout_type = $team_options['layout_type']; ?>
        <?php $vertical_alignment = $team_options['vertical_alignment']; ?>
        <?php $expandable_bio = $team_options['expandable_bio']; ?>
        <?php $expand_button_text = $team_options['expand_button_text']; ?>

<?php } ?>

<?php $name = esc_html(get_field("name", $post->ID)); ?>
<?php $title = esc_html(get_field("title", $post->ID)); ?>
<?php $phone = esc_html(get_field("phone_number", $post->ID)); ?>
<?php $email = esc_html(get_field("email", $post->ID)); ?>
<?php $bio = get_field("bio", $post->ID); ?>
<?php $optional_outside_link = esc_html(get_field("optional_outside_link", $post->ID)); ?>
<?php
$image = get_field('headshot');
$size = 'team';
$thumb = $image['sizes'][ $size ];
?>

<?php if (($layout_type == "option_1") || ($layout_type == "option_2")) {
    $col_1 = "col-lg-4";
    $col_2 = "col-lg-8";
} elseif ($layout_type == "option_3") {
    $col_1 = "col-lg-12";
    $col_2 = "col-lg-12";
} ?>
<?php if ($layout_type == "option_2") {
    $phone_icon = '<i class="fas fa-phone"></i>&nbsp;';
    $mail_icon = '<i class="fas fa-envelope"></i>&nbsp;';
} else {
    $phone_icon = '';
    $mail_icon = '';
} ?>
<?php if ($expand_button_text) { 
    $expand_button_text = $expand_button_text;
} else {
    $expand_button_text = "Read More";
} ?>
<?php if ($vertical_alignment == "Middle") { 
    $vertical_alignment = "align-items-center";
} else {
    $vertical_alignment = "align-items-start";
} ?>

<div class="team_block_wrapper layout_<?php echo $layout_type; ?>">
    <div class="row <?php echo $vertical_alignment; ?>">
        <div class="<?php echo $col_1; ?>">
            <?php if( $image ) { ?>					
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $name; ?>" />
            <?php } ?>
        </div>
        <div class="<?php echo $col_2; ?>">
            <h2 class="h4"><?php echo $name; ?></h2>
            <?php if ($title) { ?>
                <p><?php echo $title; ?></p>
            <?php } ?>
            <?php if ($phone) { ?>
                <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone_icon; ?><?php echo $phone; ?></a></p>
            <?php } ?>
            <?php if ($email) { ?>
                <p><a href="mailto:<?php echo $email; ?>"><?php echo $mail_icon; ?><?php echo $email; ?></a></p>
            <?php } ?>
            <?php if ($optional_outside_link) { ?>
                <a role="button" class="btn-mayecreate" href="<?php echo $optional_outside_link; ?>" title="This button links to <?php echo $optional_outside_link; ?>"><?php echo $expand_button_text; ?></a>
            <?php } elseif ($bio) { ?>
                <?php if ($expandable_bio == "Yes") { ?>
                    <button class="btn-mayecreate" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTeam_<?php echo $team_id; ?>" aria-expanded="false" aria-controls="collapseTeam_<?php echo $team_id; ?>" title="Expand Information about <?php echo $name; ?>"><?php echo $expand_button_text; ?></button>
                    <div class="collapse" id="collapseTeam_<?php echo $team_id; ?>">
                <?php } ?>
                        <p><?php echo $bio; ?></p>
                <?php if ($expandable_bio == "Yes") { ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php 
/*
==========================================================
FOOTER WIDGETS
==========================================================
*/
global $containerWidth;
$ftr_widgets = get_field('number_of_footer_widgets', 'option');
$span = 12;
if($ftr_widgets > 1) {$span = 6;}
if($ftr_widgets > 2) {$span = 4;}
if($ftr_widgets > 3) {$span = 3;}

$footer_widget_one = get_field('footer_widget_one', 'option');
$footer_widget_two = get_field('footer_widget_two', 'option');
$footer_widget_three = get_field('footer_widget_three', 'option');
$footer_widget_four = get_field('footer_widget_four', 'option');

if($ftr_widgets > 0) {
	echo '<div class="'. $containerWidth .'">';
		echo '<div class="row justify-content-center">';
			if ($footer_widget_one) {
				echo '<div class="col-md-'.$span.'">';
					echo $footer_widget_one;			
				echo '</div>';
			}
			if ($footer_widget_two) {
				echo '<div class="col-md-'.$span.'">';
					echo $footer_widget_two;			
				echo '</div>';
			}
			if ($footer_widget_three) {
				echo '<div class="col-md-'.$span.'">';
					echo $footer_widget_three;			
				echo '</div>';
			}
			if ($footer_widget_four) {
				echo '<div class="col-md-'.$span.'">';
					echo $footer_widget_four;			
				echo '</div>';
			}
		echo '</div>';
	echo '</div>';
}
?>
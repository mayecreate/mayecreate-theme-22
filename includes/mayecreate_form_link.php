<?php

add_filter('frm_pdfs_access_code_max_days', 'filter_access_code_max_days');
function filter_access_code_max_days() {
	return 365; // Replace 365 with the number of days. 
}
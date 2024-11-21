<?php

// More balanced approach
add_filter( 'rest_authentication_errors', function( $maybe_error ) {
	// Only allow logged in users for the users and posts endpoints
	if (( !is_user_logged_in() && stripos( $_SERVER['REQUEST_URI'], 'wp/v2/users' ) ) || ( !is_user_logged_in() && stripos( $_SERVER['REQUEST_URI'], 'wp/v2/posts' ) )) {
	  return new \WP_Error(
		'rest_auth_required',
		'No REST for the restless!',
		['status' => 401 ] 
	  );
	}
   
	// Pass through
	return $maybe_error;
} );
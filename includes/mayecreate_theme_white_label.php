<?php 
/*
 * White labels the theme login for first line of security
 * @return void
 */

function mayecreate_custom_login_logo() {
	//get the custom logo field
	$custom_logo = get_field('site_logo', 'option');
	//if you have the field, use it, else default to the one in the theme folder.
	if ($custom_logo) { $custom_logo = $custom_logo; } else { $custom_logo = get_template_directory_uri().'/img/login-logo.png'; }

	$body_background_color = (get_field('body_background_color', 'option'));
	$login_screen_background_color = (get_field('login_screen_background_color', 'option'));
	if ($login_screen_background_color) {
		$login_screen_background_color = $login_screen_background_color;
	} else {
		$login_screen_background_color = $body_background_color;
	}

	$primary_site_color = (get_field('primary_site_color', 'option'));
	$secondary_color = (get_field('secondary_color', 'option'));

	$link_color = (get_field('link_color', 'option'));
	$link_hover_color = (get_field('link_hover_color', 'option'));
	
	$button_color = (get_field('button_color', 'option'));
	$button_background_color = (get_field('button_background_color', 'option'));
	$button_hover_color = (get_field('button_hover_color', 'option'));
	$button_hover_background_color = (get_field('button_hover_background_color', 'option'));

	echo '<style type="text/css">
	body.login {
		background: '.$login_screen_background_color.';
	}
	#login {
		width: 95%;
		max-width:600px;
		padding: 70px 0 0 0;
		margin: auto;
	}
	.login h1 a {
		max-width: 100% !important;
		width: 100% !important;
		height: 100px !important;
		background:url('.$custom_logo.') !important;
		background-repeat: no-repeat !important;
		background-size: contain !important;
		background-position: center center !important;
		margin-bottom: 0;
	}
	.login form {
		background: transparent;
		-webkit-box-shadow: none;
    	box-shadow: none;
		margin-top: 0;
		border:0 none;
	}
	.login label {
		color: '.$primary_site_color.';
	}	
	.login form .forgetmenot label {
		color: '.$primary_site_color.';
	}
	.login a:link, .login a:visited {
		color: '.$link_color.' !important;
	}
	.login a:hover, .login a:active {
		color: '.$link_hover_color.' !important;
	}
	input[type=text]:focus, input[type=password]:focus, input[type=checkbox]:focus{
		/* Style the form field focus state */
		border-color: '.$secondary_color.';
		-webkit-box-shadow: 0 0 12px rgba(0,0,0,.25);
		box-shadow: 0 0 12px rgba(0,0,0,.25);
	}
	.wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large{
		padding: 18px 40px;
		line-height: 0;
		font-size: 18px;
	}
	.wp-core-ui .button-primary {
		background: '.$button_background_color.';
		border-color: '.$button_background_color.';
		-webkit-box-shadow: none;
		box-shadow: none;
		color: '.$button_color.';
		text-decoration: none;
		text-shadow: none;
	}
	.wp-core-ui .button-primary:hover, .wp-core-ui .button-primary:active, .wp-core-ui .button-primary:focus {
		background: '.$button_hover_background_color.';
		border-color: '.$button_hover_background_color.';
		-webkit-box-shadow: none;
		box-shadow: none;
		color: '.$button_hover_color.';
	}
	
</style>';
}
add_action('login_head', 'mayecreate_custom_login_logo'); 


add_action( 'wp_before_admin_bar_render', function() {
global $wp_admin_bar;
$wp_admin_bar->remove_menu('wp-logo');
}, 7 );

function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 

function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | <a href="http://www.mayecreate.com/what-we-do/web-design/" target="_blank">Web Design by MayeCreate Design</a></p>';
 
}
  
add_filter('admin_footer_text', 'remove_footer_admin');


remove_action('welcome_panel', 'wp_welcome_panel');


function mayecreate_DBD() { 
	echo '<!--
	************
	DONT BE DUMB
	************
												@@@@@@@                                                 
											   @@@@@@@@@                                                
							 ,@@@              &@@@@@@@#                                                
						   @@@@@@@@,       /@            @@@@@@@@@@@@@@@                                
						   @@@@@@@@@   @@@@@@@@@@.   #@@@@@@@@@@@@@@@@@@@@@@@@@                         
							@@@@@@&   (@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&                    
									 @@@@@@@@@@@@%                       ,@@@@@@@@@@@@@                 
						@@@@@@@@@@@@@@@@@@                                       @@@@@@@@@              
			@@@@@@    @@@@@@@@@@@@@@@            (@@@@@@@@@@@@@@@@@@@@@@@@@.          @@@@@@@           
		   @@@@@@@@@   @@@@@@@@@@          @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*       @@@@@@         
		   @@@@@@@@/   @@@@@@@        &@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@(     #@@@@@       
			 @@@@     @@@@@%       @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@     @@@@@      
					@@@@@       @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@         @@@@@@@@@@.    @@@@@    
		   @@@@@@@@@@@@,      @@@@@@@@@@@@@&.  @@@@@          @@@@@@             ,@@@@@@@@@@    @@@@@   
		  @@@@@@@@@@@@      @@@@@@             @@@             @@@   @@@@@@@      @@@@@@@@@@@    @@@@&  
		 @@@@@@@@@@@#     %@@@@@@@            ,@  @@@@@@@,     &@  @@@@@@@@@      @@@@@@@@@@@@   #@@@@  
		@@@@@@@@@@@*     @@@@@@@@@@@@@@@      , &@@@@@@@@@       @@@@@@@@@@@      @@@@@@@@@@@@    @@@@@ 
	   /@@@@@@@@@@@     @@@@@@@@@@@@@@@@       @@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@@    @@@@@ 
	   @@@@@@@@@@@     /@@@@@@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@@@    @@@@@ 
	   @@@@@@@@@@#     @@@@@@@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@@@    @@@@@ 
	   @@@@@@@@@@      @@@@@@@@@@@@@@@@      @@@@@@@@@@@.     @@@@@@@@@@@       @@@@@@@@@@@@@,   %@@@@@ 
	   @@@@@@@@@@     .@@@@@@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@@&    @@@@@( 
	   @@@@@@@@@@      @@@@@@@@@@@@@@@      @@@@@@@@@@@.     @@@@@@@@@@@      %@@@@@@@@@@@@     @@@@@@  
	   @@@@@@@@@@#     @@@@@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@    @@@@@@@   
		@@@@@@@@@@     @@@@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@#     @@@@@@@    
		%@@@@@@@@@(     @@@@@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@      @@@@@@@@     
		 @@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@      @@@@@@@@@@@@      @@@@       %@@@@/          
		  (@@@@@@@@@      @@@@@@@@@      @@@@@@@@@@@@      @@@@@@@@@@@@@             @@@@@@   @@@@@     
			@@@@@@@@@@      @@@@@@@      @@@@@@@@@@@,     %@@@@@@@@@@@@@@@&. ,@@@@@@@@@@@    @@@@@@@    
			 %@@@@@@@@@#      @@@@      @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@        @@@@@@@    
			   @@@@@@@@@@@       @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@/        @@@             
				  @@@@@@@@@@@         @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@,          /@@@@                
					@@@@@@@@@@@@@                ,(&@@@@&/,                   @@@@@@@                   
					   .@@@@@@@@@@@@@@@.                               @@@@@@@@@@.                      
						   .@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@                           
								 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@                                 
										 (@@@@@@@@@@@@@@@@@@@@,                                         
	-->
	';
}

<?php
/*
Template Name: Logged-In Users Only
*/
?>
<?php get_header(); ?>
<?php if(!is_user_logged_in() ) { ?> 
        <div class="row justify-content-center">
            <div class="col-lg-6">
				<h2 class="center">Sorry, this page is for logged in users only.</h2>
                <?php $login_form_args = array(
                    'echo'           => true,
                    'remember'       => true,
                    'redirect'       => ( is_ssl() ? 'https://' : 'https://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                    'form_id'        => 'loginform',
                    'id_username'    => 'user_login',
                    'id_password'    => 'user_pass',
                    'id_remember'    => 'rememberme',
                    'id_submit'      => 'wp-submit',
                    'label_username' => __( 'Username or Email' ),
                    'label_password' => __( 'Password' ),
                    'label_remember' => __( 'Remember Me' ),
                    'label_log_in'   => __( 'Log In' ),
                    'value_username' => '',
                    'value_remember' => false
                ); ?>
                <?php wp_login_form( $login_form_args ); ?> 
		        <a class="center" href="/wp-login.php?action=lostpassword"><p>Reset Password</p></a> 
            </div>
        </div>
<?php } else { ?>
	<div class="row">
		    <?php get_template_part('partials/loop','standard'); ?>
		</div>
	<?php } ?>
	</div><!-- / hfeed site container -->
</div><!-- / page -->


<?php get_footer(); ?>
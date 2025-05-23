<?php
/* Customizations for login page */

function synergy_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'synergy_logo_url' );

function synergy_logo_url_title() {
    return 'Synergy Health Partners';
}

add_filter( 'login_headertext', 'synergy_logo_url_title' );

function synergy_login_logo() { 
    // Get the logo URL set in the customizer
    $logo_url = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );
?>
    <style type="text/css">
        .login {
            background-color: #fafafa;
        }
        
        #login p,
        #login a {
            font-family: 'Be Vietnam', Arial, sans-serif;
            font-size: 17px;
            line-height: 26px;
        }
        
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $logo_url;?>);
		height:85px;
		width:320px;
		background-size: contain;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
        
        .login #login .message,
        .login #login .notice {
            border-left: solid 4px #218372;
        }
        
        .wp-core-ui #loginform {
            border-radius: 8px;
            border: solid 1px #e7e7e7;
            outline: 0;
            padding: 24px;
        }
        
        .wp-core-ui #loginform  .button.button-large {
            font-family: 'Be Vietnam', Arial, sans-serif;
            color: #ffffff;
            font-weight:600;
            background-color: #005288;
            border-radius: 60px;
            padding: 8px 32px;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'synergy_login_logo' );

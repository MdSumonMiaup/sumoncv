<?php 

require_once get_template_directory() . '/inc/theme-setup.php'; // Theme Setup options and defaults
require_once get_template_directory() . '/inc/enqueue.php'; // load style and scripts
require_once get_template_directory() .'/theme-options/codestar-framework.php'; // active cs
require_once get_template_directory() .'/inc/track-post-view.php'; // track post view count
require_once get_template_directory() . '/inc/comment-listing.php'; // For Comments Style
require_once get_template_directory() . '/inc/register-sidebar.php'; // For Registering Sidebar
require_once get_template_directory() . '/inc/custom-widgets.php'; // for custom widgets
require_once get_template_directory() . '/inc/acf-data.php'; // for custom field
require_once get_template_directory() . '/inc/customize-functions.php'; // for theme customize panel
require_once get_template_directory() . '/inc/sumoncv-plugin-activation.php'; // required plugins
require_once get_template_directory() . '/inc/sumoncv-demo-import.php'; // required plugins
// require_once get_template_directory() . '/inc/custom-post-type.php'; // required plugins


require_once get_template_directory() .'/inc/codestar-options.php'; // codestar options
$options = get_option( 'my_framework' ); // for geting value


// Register Nav Menu
register_nav_menus( array(
    'primary_menu' => __( 'Primary Menu', 'sumoncv' ),
    'footer_menu'  => __( 'Footer Menu', 'sumoncv' ),
) );


/*-----------------------------------------------------------------------------------*/
# Custom Gravatar
/*-----------------------------------------------------------------------------------*/
function tie_custom_gravatar ($avatar) {
	$tie_gravatar = get_option( 'my_framework' )['profile_pic']['url'];
	if($tie_gravatar){
		$custom_avatar = get_option( 'my_framework' )['profile_pic']['url'];
		$avatar[$custom_avatar] = "Custom Gravatar";
	}
	return $avatar;
}
add_filter( 'avatar_defaults', 'tie_custom_gravatar' );

// 
function credit_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'credit_add_editor_styles' );
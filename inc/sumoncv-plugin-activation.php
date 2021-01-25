<?php 

require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function sumoncv_activattion() {

    // Redquire Plugins
    $plugins = array(
        array(
            'name'               => __('Contact Form 7', 'sumoncv'),
			'slug'               => 'contact-form-7', 
			'required'           => true,
        ),
        array(
            'name'               => __('One Click Demo Import', 'sumoncv'),
			'slug'               => 'one-click-demo-import', 
			'required'           => true,
        ),
        array(
            'name'               => __('Advanced Custom Fields', 'sumoncv'),
			'slug'               => 'advanced-custom-fields', 
			'required'           => true,
        ),
        array(
            'name'               => __('Custom Post Type', 'sumoncv'),
            'slug'               => 'sumoncv-cpt', 
            'source'             => 'https://drive.google.com/u/0/uc?id=1qCJ9-T2z4Bg1BAdsc5ANImT1m4xoFJbT&export=download',
			'required'           => true,
        ),
    );

    // for configuration
    $config = array(
        'id'           => 'sumoncv_plugin_activation',
		'menu'         => 'sumoncv_plugin_activation',
        'parent_slug'  => 'themes.php',           
		'has_notices'  => true,
    );

    tgmpa($plugins, $config);

}
add_action('tgmpa_register', 'sumoncv_activattion');
<?php 

/*
*** Admin Apearance Customize Screen-------------------------
*/

function sumoncv_information_edit($wp_customize) {
    // Create Main Section -----------------------------------------------------
    $wp_customize->add_panel( 'theme_options', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Theme Options', 'sumoncv'),
        'description'    => __('Several settings pertaining my theme', 'sumoncv'),
    ) );

    // Sub section for Preloader Setting Option --------------------------------
    $wp_customize->add_section( 'sumoncv_preloader', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Preloader', 'sumoncv'),
        'description'    =>  __('Preloader configuration', 'sumoncv'),
        'panel'          => 'theme_options',
    ) );
    
    // For Headline 
    $wp_customize->add_setting('sumoncv_preloader_option', array(
        'default' => 'Off',
        'sanitize_callback' => 'esc_attr',
        
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sumoncv_preloader_option', array(
        'label' => __('Preloader', 'sumoncv'),
        'section' => 'sumoncv_preloader',
        'settings' => 'sumoncv_preloader_option',
        'type' => 'select',
        'choices' => array(
            'On' => 'On',
            'Off' => 'Off',
        ),
    )));

    // Sub section Footer Logo Option --------------------------------
    $wp_customize->add_section( 'footer_edit', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer', 'sumoncv'),
        'description'    =>  __('Footer Logo Set', 'sumoncv'),
        'panel'          => 'theme_options',
    ) );
    $wp_customize->add_section('footer_edit', array(
        'title' => __('Edit Footer', 'sumoncv'),
    ));
    


}
add_action( 'customize_register', 'sumoncv_information_edit' );




?>
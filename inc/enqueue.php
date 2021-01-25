<?php 

// Loading Scripts //

function sumoncv_scipts() {
    //wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'lightcase', get_template_directory_uri() . '/assets/css/lightcase.min.css');
    wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.all.min.css');
    wp_enqueue_style( 'linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css', array(), '1.0.0' );
    wp_enqueue_style( 'exo-google-font', 'https://fonts.googleapis.com/css?family=Exo+2:400,700,900&display=swap', array(), '1.0.0' );
	// time() function can be used as version
    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    

    // Enqueue Javascript

    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), '3.5.1', 'true' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.0.0', 'true' );
    wp_enqueue_script( 'carousel.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'typed.js', get_template_directory_uri() . '/assets/js/typed.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'lightcase.js', get_template_directory_uri() . '/assets/js/lightcase.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'isotope.js', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'wow.js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'ripple.js', get_template_directory_uri() . '/assets/js/jquery.ripples.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'particle.js', get_template_directory_uri() . '/assets/js/particles.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'particle-app.js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'linearicons.js', get_template_directory_uri() . 'https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', 'true' );
}

add_action( 'wp_enqueue_scripts', 'sumoncv_scipts' );

?>
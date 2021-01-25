<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="keywords" content="Md Sumon Mia, Sumon, Sumon Mia, Web Designer, Web Developer, Front End Developer, Fullstack Developer, Wordpress Expert" />
    <meta name="author" content="Md Sumon Mia" />

    <!-- Stylesheet -->
    <?php wp_head(); ?>
    <!-- Bootstrap -->
        
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

        <!-- preloader -->
        <?php if(get_theme_mod('sumoncv_preloader_option') == 'On' ) { ?>
            <div id="preloader">
                <div id="preloader-circle">
                    <span></span>
                    <span></span>
                </div>
            </div>
        <?php } ?>
        <!-- /preloader -->
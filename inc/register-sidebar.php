<?php 

/*
===> Register Widgets -------------------------------------------
*/

function register_primary_sidebar() {
    
    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' , 'sumoncv'),
            'description'   => __( 'Add Widgets Here' , 'sumoncv'),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    /** Register Sidebar **/
    register_sidebar(
        array(
            'id'            => 'author-page-sidebar',
            'name'          => __( 'Author Page Sidebar' , 'sumoncv'),
            'description'   => __( 'Add Widgets Here' , 'sumoncv'),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

}

add_action('widgets_init', 'register_primary_sidebar');


?>

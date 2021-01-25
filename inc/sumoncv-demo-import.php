<?php 

function sumoncv_import_files() {
	return array(
		array(
			'import_file_name'             => 'Sumoncv Demo Import 1',
			'categories'                   => array( 'Updated' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/demo-1.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-data/demo-1-widgets.wie',
            // 'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/demo-data/demo-1-customizer.dat',
			'import_preview_image_url'     => 'https://i.ibb.co/qsqPDfx/sumoncv-demu.jpg',
			'import_notice'                => __( 'Thank you for using the theme and installing the demo.', 'sumoncv' ),
			'preview_url'                  => 'https://mdsumonmia.com',
		),
		array(
			'import_file_name'             => 'Demo Import 2',
			'categories'                   => array( 'Upcomming' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content2.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets2.json',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer2.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
					'option_name' => 'redux_option_name',
				),
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux2.json',
					'option_name' => 'redux_option_name_2',
				),
			),
			'import_preview_image_url'     => 'https://i.ibb.co/BgvvnNm/aspekt-creative-launching-page.jpg',
			'import_notice'                => __( 'A special note for this import.', 'sumoncv' ),
			'preview_url'                  => '',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'sumoncv_import_files' );

function sumoncv_after_import_setup() {
	// Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $main_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary_menu' => $main_menu->term_id,
            'footer_menu' => $footer_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'sumoncv_after_import_setup' );
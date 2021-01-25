<?php 

/*
Plugin Name: Custom Post Type
Plugin URI: http://learnsf.local/sumoncv-cpt
description: A plugin for sumoncv custom post type
Version: 1.0.0
Author: Md Sumon Mia
Author URI: https://mdsumonmia.me
Text Domain: sumoncv
License: GPL2
*/

function sumoncv_reg_custom_post() {
	/**
	 * Post Type: Portfolio.
	 */

	$labels = [
		"name" => __( "Portfolio", "sumoncv" ),
		"singular_name" => __( "Portfolio", "sumoncv" ),
		"menu_name" => __( "My Portfolio", "sumoncv" ),
		"all_items" => __( "All Portfolio", "sumoncv" ),
		"add_new" => __( "Add new", "sumoncv" ),
		"add_new_item" => __( "Add new Portfolio", "sumoncv" ),
		"edit_item" => __( "Edit Portfolio", "sumoncv" ),
		"new_item" => __( "New Portfolio", "sumoncv" ),
		"view_item" => __( "View Portfolio", "sumoncv" ),
		"view_items" => __( "View Portfolio", "sumoncv" ),
		"search_items" => __( "Search Portfolio", "sumoncv" ),
		"not_found" => __( "No Portfolio found", "sumoncv" ),
		"not_found_in_trash" => __( "No Portfolio found in trash", "sumoncv" ),
		"parent" => __( "Parent Portfolio:", "sumoncv" ),
		"featured_image" => __( "Featured image for this Portfolio", "sumoncv" ),
		"set_featured_image" => __( "Set featured image for this Portfolio", "sumoncv" ),
		"remove_featured_image" => __( "Remove featured image for this Portfolio", "sumoncv" ),
		"use_featured_image" => __( "Use as featured image for this Portfolio", "sumoncv" ),
		"archives" => __( "Portfolio archives", "sumoncv" ),
		"insert_into_item" => __( "Insert into Portfolio", "sumoncv" ),
		"uploaded_to_this_item" => __( "Upload to this Portfolio", "sumoncv" ),
		"filter_items_list" => __( "Filter Portfolio list", "sumoncv" ),
		"items_list_navigation" => __( "Portfolio list navigation", "sumoncv" ),
		"items_list" => __( "Portfolio list", "sumoncv" ),
		"attributes" => __( "Portfolio attributes", "sumoncv" ),
		"name_admin_bar" => __( "Portfolio", "sumoncv" ),
		"item_published" => __( "Portfolio published", "sumoncv" ),
		"item_published_privately" => __( "Portfolio published privately.", "sumoncv" ),
		"item_reverted_to_draft" => __( "Portfolio reverted to draft.", "sumoncv" ),
		"item_scheduled" => __( "Portfolio scheduled", "sumoncv" ),
		"item_updated" => __( "Portfolio updated.", "sumoncv" ),
		"parent_item_colon" => __( "Parent Portfolio:", "sumoncv" ),
	];

	$args = [
		"label" => __( "Portfolio", "sumoncv" ),
		"labels" => $labels,
		"description" => "You can post your sample project here and it will display on your portfolio section.....",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 10,
		"menu_icon" => "dashicons-schedule",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "post_tag" ],
	];

    register_post_type( "portfolio", $args );
    

    /**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "sumoncv" ),
		"singular_name" => __( "Category", "sumoncv" ),
	];

	$args = [
		"label" => __( "Categories", "sumoncv" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'portfolio-cat', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "portfolio-cat",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "portfolio-cat", [ "portfolio" ], $args );
}

add_action( 'init', 'sumoncv_reg_custom_post' );



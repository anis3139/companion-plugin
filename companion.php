<?php
/*
Plugin Name: Companion
Plugin URI: https://www.rainyforest.xyz/
Description: Just anothe plugin new post section.
Author: Anis Arronno
Author URI: https://www.rainyforest.xyz/
Text Domain: companion
Domain Path: /languages/
Version: 1.0.0
*/
function mealc_load_text_domain(){
    load_plugin_textdomain('meal-companion',false,dirname(__FILE__)."/languages");
}
add_action("plugins_loaded","mealc_load_text_domain");




function mealc_register_my_cpts_section() {

	/**
	 * Post Type: sections.
	 */

	$labels = [
		"name" => __( "sections", "meal" ),
		"singular_name" => __( "section", "meal" ),
	];

	$args = [
		"label" => __( "sections", "meal" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
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
		"rewrite" => [ "slug" => "section", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title", "editor", "thumbnail","excerpt" ],
	];

	register_post_type( "section", $args );
    
    	$labels = [
		"name" => __( "Reservations", "meal" ),
		"singular_name" => __( "section", "meal" ),
	];

	$args = [
		"label" => __( "Reservations", "meal" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
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
		"rewrite" => [ "slug" => "reservation", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title"],
	];
	register_post_type( "reservation", $args );
    
	$labels = [
		"name" => __( "recipes", "meal" ),
		"singular_name" => __( "recipe", "meal" ),
		"featured_image"=>__('Recipe Photo', 'meal')
	];

	$args = [
		"label" => __( "recipes", "meal" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
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
		"rewrite" => [ "slug" => "recipe", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-smiley",
		"supports" => [ "title", "editor", "thumbnail","excerpt"],
		"taxonomies" => array('category'),
	];

	register_post_type( "recipe", $args );
}

add_action( 'init', 'mealc_register_my_cpts_section' );

<?php

function CustomPostType() 
{
	/* Post Type For Beer and Brands Start */
	$LBLBeersAndBrandsPT = array(
			'name'               => __( 'Beers & Brands', 'text-domain' ),
			'singular_name'      => __( 'Beers & Brands', 'text-domain' ),
			'add_new'            => _x( 'Add New Beers & Brands', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Add New Beers & Brands', 'text-domain' ),
			'edit_item'          => __( 'Edit Beers & Brands', 'text-domain' ),
			'new_item'           => __( 'New Beers & Brands', 'text-domain' ),
			'view_item'          => __( 'View Beers & Brands', 'text-domain' ),
			'search_items'       => __( 'Search Beers & Brands', 'text-domain' ),
			'not_found'          => __( 'No Beers & Brands found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Beers & Brands found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Beers & Brands:', 'text-domain' ),
			'menu_name'          => __( 'Beers & Brands', 'text-domain' ),
	);

	$ArgBeersAndBrandsPT = array(
		'labels'              => $LBLBeersAndBrandsPT,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => "dashicons-palmtree",
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			//'excerpt',
			'custom-fields',
			//'page-attributes',
		),
	);

	register_post_type( 'beers-and-brands', $ArgBeersAndBrandsPT );

	$LBLBeersAndBrandsTAX = array(
		'name'                  => _x( 'Category', 'Taxonomy plural name', 'text-domain' ),
		'singular_name'         => _x( 'Category', 'Taxonomy singular name', 'text-domain' ),
		'search_items'          => __( 'Search Category', 'text-domain' ),
		'popular_items'         => __( 'Popular Category', 'text-domain' ),
		'all_items'             => __( 'All Category', 'text-domain' ),
		'parent_item'           => __( 'Parent Category', 'text-domain' ),
		'parent_item_colon'     => __( 'Parent Category', 'text-domain' ),
		'edit_item'             => __( 'Edit Category', 'text-domain' ),
		'update_item'           => __( 'Update Category', 'text-domain' ),
		'add_new_item'          => __( 'Add New Category', 'text-domain' ),
		'new_item_name'         => __( 'New Category Name', 'text-domain' ),
		'add_or_remove_items'   => __( 'Add or remove Category', 'text-domain' ),
		'choose_from_most_used' => __( 'Choose from most used Category', 'text-domain' ),
		'menu_name'             => __( 'Category', 'text-domain' ),
	);

	$ARGBeersAndBrandsTAX = array(
		'labels'            => $LBLBeersAndBrandsTAX,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'beers-and-brands-category', array( 'beers-and-brands' ), $ARGBeersAndBrandsTAX );

	/* Post Type For Beer and Brands End */


	/* Post Type for Events Start */

	$LBLEvents = array(
			'name'               => __( 'Events', 'text-domain' ),
			'singular_name'      => __( 'Events', 'text-domain' ),
			'add_new'            => _x( 'Add New Events', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Add New Events', 'text-domain' ),
			'edit_item'          => __( 'Edit Events', 'text-domain' ),
			'new_item'           => __( 'New Events', 'text-domain' ),
			'view_item'          => __( 'View Events', 'text-domain' ),
			'search_items'       => __( 'Search Events', 'text-domain' ),
			'not_found'          => __( 'No Events found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Events found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Events:', 'text-domain' ),
			'menu_name'          => __( 'Events', 'text-domain' ),
	);

	$ArgEvents = array(
		'labels'              => $LBLEvents,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => "dashicons-calendar-alt",
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			//'excerpt',
			'custom-fields',
			//'page-attributes',
		),
	);

	register_post_type( 'events', $ArgEvents );

	/* Post Type for Events Start */



	/**
	 * Registers a custom post type for Specials
	 */
	$LBLLocationSpecialsPT = array(
			'name'               => __( 'Location Specials', 'text-domain' ),
			'singular_name'      => __( 'Location Specials', 'text-domain' ),
			'add_new'            => _x( 'Add New Location Specials', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Add New Location Specials', 'text-domain' ),
			'edit_item'          => __( 'Edit Location Specials', 'text-domain' ),
			'new_item'           => __( 'New Location Specials', 'text-domain' ),
			'view_item'          => __( 'View Location Specials', 'text-domain' ),
			'search_items'       => __( 'Search Location Specials', 'text-domain' ),
			'not_found'          => __( 'No Location Specials found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Location Specials found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Location Specials:', 'text-domain' ),
			'menu_name'          => __( 'Location Specials', 'text-domain' ),
	);

	$ArgLocationSpecialsPT = array(
		'labels'              => $LBLLocationSpecialsPT,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => "dashicons-location-alt",
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'thumbnail',
			//'excerpt',
			'custom-fields',
			//'page-attributes',
		),
	);

	register_post_type( 'location-specials', $ArgLocationSpecialsPT );

	$LBLLocationSpecialsTAX = array(
		'name'                  => _x( 'Category', 'Taxonomy plural name', 'text-domain' ),
		'singular_name'         => _x( 'Category', 'Taxonomy singular name', 'text-domain' ),
		'search_items'          => __( 'Search Category', 'text-domain' ),
		'popular_items'         => __( 'Popular Category', 'text-domain' ),
		'all_items'             => __( 'All Category', 'text-domain' ),
		'parent_item'           => __( 'Parent Category', 'text-domain' ),
		'parent_item_colon'     => __( 'Parent Category', 'text-domain' ),
		'edit_item'             => __( 'Edit Category', 'text-domain' ),
		'update_item'           => __( 'Update Category', 'text-domain' ),
		'add_new_item'          => __( 'Add New Category', 'text-domain' ),
		'new_item_name'         => __( 'New Category Name', 'text-domain' ),
		'add_or_remove_items'   => __( 'Add or remove Category', 'text-domain' ),
		'choose_from_most_used' => __( 'Choose from most used Category', 'text-domain' ),
		'menu_name'             => __( 'Category', 'text-domain' ),
	);

	$ARGLocationSpecialsTAX = array(
		'labels'            => $LBLLocationSpecialsTAX,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'location-special-category', array( 'location-specials' ), $ARGLocationSpecialsTAX );

	/* Post Type For Beer and Brands End */

}

add_action( 'init', 'CustomPostType' );

?>
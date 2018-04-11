 <?php

/*======================================
	  wrapkit enqueue Styles and Scripts 
========================================*/

// call the styles
function wrapkit_include_styles(){
	wp_enqueue_style('style', get_template_directory_uri().'/output/style.min.css', array(), false, 'all');
    wp_enqueue_script('mainjs', get_template_directory_uri().'/output/js/custom.min.js', array(), false, true);
    wp_enqueue_script('browser-sync', 'http://localhost:3000/browser-sync/browser-sync-client.js', array(), false, true);
}
// call the scripts


add_action('wp_enqueue_scripts', 'wrapkit_include_styles');


/*======================
       init menus here 
========================*/

function wrapkit_init_menus(){
	register_nav_menus(array(
		'header-menu'=> 'Header Menu',
		'footer-menu'=> 'Footer Menu'
	));
}

add_action('init', 'wrapkit_init_menus');



/*================================================
	Add Customize Appearance of Header Theme
=================================================*/
// customize Logo image
function wrapkit_custom_logo($wp_customize){
	$wp_customize->add_section('custom-logo', array(
		'title'=> 'Logo',
		'priority'=> 2
	));
	// Logo 1 
	$wp_customize->add_setting('theme-logo');
	
	$wp_customize->add_control(
	 new WP_Customize_cropped_image_control($wp_customize,
	  'the_theme_logo',
	  array(
		'label'=> 'Logo 1',
		'section'=> 'custom-logo',
		'settings'=> 'theme-logo',
		'width'=>169,
		'height'=>60
	)));
	
	// Logo Sticky
	$wp_customize->add_setting('theme-logo-sticky');
	
	$wp_customize->add_control(
	 new WP_Customize_cropped_image_control($wp_customize,
	  'the_theme_logo_sticky',
	  array(
		'label'=> 'Logo Sticky',
		'section'=> 'custom-logo',
		'settings'=> 'theme-logo-sticky',
		'width'=>169,
		'height'=>60
	)));
}

add_action('customize_register', 'wrapkit_custom_logo');

// customize section one[1]
function wrapkit_header_title($wp_customize){
	$wp_customize->add_section('wrapkit_header_title_section', array(
		'title'=> 'Header Title',
		'priority'=> 3
		
		
	));
	//  Display Section Choices here 
	$wp_customize->add_setting('wrapkit_header_section_display', array(
		'default'=> 'No'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wrapkit_header_display', array(
		'label'=> 'Display This Section ?',
		'section'=> 'wrapkit_header_title_section',
		'settings'=> 'wrapkit_header_section_display',
		'type'=> 'select',
		'choices'=> array('No'=> 'No', 'Yes'=>'Yes')
	)));
	
	//  Headline here 
	$wp_customize->add_setting('wrapkit_header_title_headline', array(
		'default'=> 'Wrapkit Lite'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wrapkit_header_control_headline', array(
		'label'=> 'Headline',
		'section'=> 'wrapkit_header_title_section',
		'settings'=> 'wrapkit_header_title_headline'
	)));
	// description here 
	$wp_customize->add_setting('wrapkit_header_desc_headline', array(
		'default'=> 'Free Bootstrap 4 UI Kit with
Lots of Ready to Use Sections'
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'wrapkit_header_control_description', array(
		'label'=> 'Description',
		'type'=> 'textarea',
		'section'=> 'wrapkit_header_title_section',
		'settings'=> 'wrapkit_header_desc_headline'
	)));
	
	// image here 
	$wp_customize->add_setting('wrapkit_header_image');
	$wp_customize->add_control( new WP_Customize_cropped_image_control($wp_customize, 'wrapkit_image_control', array(
		'label'=> 'Image',
		'section'=> 'wrapkit_header_title_section',
		'settings'=> 'wrapkit_header_image',
		'width'=> 1920,
		'height'=> 1080
	)));
}

add_action('customize_register', 'wrapkit_header_title');

/*===========================
     add theme support thumbnail
=============================*/

add_theme_support( 'post-thumbnails' );
// second post thumbnail 

if (class_exists('MultiPostThumbnails')) {
 
	new MultiPostThumbnails(array(
	'label' => 'Secondary Image',
	'id' => 'secondary-image',
	'post_type' => 'post'
	 ) );
	 
	 }
add_image_size('full');


/*===================
 include walker file
====================*/

require get_template_directory().'/inc/walker.php';

/*=========================
      the exerpt function
===========================*/


function theme_post_the_excrept_lenght($length){
	return 31;
}
add_filter("excerpt_length", "theme_post_the_excrept_lenght");

function theme_post_the_excrept_more($more){
	return '';
}
add_filter("excerpt_more", "theme_post_the_excrept_more");



/*===============================
        custom posts type
 ================================*/


// Register Works Custom Post Type
function custom_post_type_works() {
	$labels = array(
		'name'                  => _x( 'works', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'works', 'text_domain' ),
		'name_admin_bar'        => __( 'works', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	
	$args = array(
		'label'                 => __( 'works', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'			=> get_template_directory_uri().'/admin/images/network.png'
	);
	
	register_post_type( 'works', $args );

}
add_action( 'init', 'custom_post_type_works' );

// Register Custom Taxonomy
function custom_taxonomy_work_service() {

	$labels = array(
		'name'                       => _x( 'work Services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'work Service', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'work Services', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'work_service', array( 'works' ), $args );

}
add_action( 'init', 'custom_taxonomy_work_service', 0 );

/*


// Register Works Custom Post Type
function custom_post_type_works() {
	$labels = array(
		'name'                  => _x( 'works', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'works', 'text_domain' ),
		'name_admin_bar'        => __( 'works', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	
	$args = array(
		'label'                 => __( 'works', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'			=> get_template_directory_uri().'/admin/images/network.png'
	);
	
	register_post_type( 'works', $args );

}
add_action( 'init', 'custom_post_type_works' );

// Register Custom Taxonomy
function custom_taxonomy_work_service() {

	$labels = array(
		'name'                       => _x( 'work Services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'work Service', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'work Services', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);

	register_taxonomy( 'work_service', array( 'works' ), $args );

}
add_action( 'init', 'custom_taxonomy_work_service', 0 );









*/







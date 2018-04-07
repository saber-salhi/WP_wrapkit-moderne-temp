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


/*===================
 include walker file
====================*/

require get_template_directory().'/inc/walker.php';


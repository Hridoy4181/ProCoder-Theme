<?php

function hri_customizer_register($wp_customize) {

// Header area function
$wp_customize -> add_section( 'hri_header_area', array(
    'title' => __('Header Area', 'hridoyrahman'),
    'description' => 'Update your header area from here.'
) );

$wp_customize -> add_setting( 'hri_logo', array(
    'default' => get_bloginfo( 'template_directory' ) . '/img/logo.png',
) );

$wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'hri_logo', array(
    'label' => 'Logo Upload',
    'description' => 'Upload logo from here',
    'setting' => 'hri_logo',
    'section' => 'hri_header_area',
) ));


// Menu position option
$wp_customize -> add_section( 'hri_menu_option', array(
    'title' => __('Menu Position Option', 'hridoyrahman'),
    'description' => 'Update your menu position from here.'
) );

$wp_customize -> add_setting( 'hri_menu_position', array(
    'default' => 'right_menu',
) );

$wp_customize -> add_control('hri_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'hri_menu_position',
    'section' => 'hri_menu_option',
    'type' => 'radio',
    'choices' => array(
        'left_menu' => 'Left Menu',
        'right_menu' => 'Right Menu',
        'center_menu' => 'Center Menu',
    ),
) );



// Footer Option
$wp_customize -> add_section( 'hri_footer_option', array(
    'title' => __('Footer Option', 'hridoyrahman'),
    'description' => 'Update your footer settings from here.'
) );

$wp_customize -> add_setting( 'hri_copyright_section', array(
    'default' => '&copy; Copyright 2022 | ShapedPlugin, BD',
) );

$wp_customize -> add_control('hri_copyright_section', array(
    'label' => 'Copyright Text ',
    'description' => 'Update your copyright text from here',
    'setting' => 'hri_copyright_section',
    'section' => 'hri_footer_option',
) );

}
add_action( 'customize_register', 'hri_customizer_register' );
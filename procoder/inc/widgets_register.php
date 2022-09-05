<?php
// Sidebar Register Function

function hri_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'hridoyrahman'),
    'id'   => 'sidebar-1',
    'description' => __('Appears in the sidebar in blog page and also other page', 'hridoyrahman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 1', 'hridoyrahman'),
    'id'   => 'footer-1',
    'description' => __('Appears in the sidebar in blog page and also other page', 'hridoyrahman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'hridoyrahman'),
    'id'   => 'footer-2',
    'description' => __('Appears in the sidebar in blog page and also other page', 'hridoyrahman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'hridoyrahman'),
    'id'   => 'footer-3',
    'description' => __('Appears in the sidebar in blog page and also other page', 'hridoyrahman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'hri_widgets_register');
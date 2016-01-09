<?php

function ledgo_register_theme_menu() {
  register_nav_menu('primary', 'Hoofdnavigatie');
}

add_action('init', 'ledgo_register_theme_menu');

function ledgo_widgets_init() {
  // located in the sidebar. Empty by default.
  register_sidebar(array(
    'name' => 'Sidebar Widget Area',
    'id' => 'sidebar-widget-area',
    'description' => 'De widget area voor de sidebar',
    'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  // located in the footer. Empty by default.
  register_sidebar(array(
    'name' => 'Footer Widget Area',
    'id' => 'footer-widget-area',
    'description' => 'De widget area voor de footer',
    'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'ledgo_widgets_init');


?>

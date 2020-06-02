<?php

function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menu');

register_nav_menus(
        
        array(
            
            'top-menu' => __('Top Menu', 'theme'), 
            'footer-menu' => __('Footer Menu', 'theme'),
        )
        
        );

add_theme_support( 'post-thumbnails' );

?>
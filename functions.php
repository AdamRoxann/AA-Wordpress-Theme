<?php

// Load css
function load_css(){
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), false, 'all');
	wp_enqueue_style('custom');
    wp_register_style('experience', get_template_directory_uri().'/css/experience-timeline.css', array(), false, 'all');
	wp_enqueue_style('experience');
    wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css', false, 'all');	
}

add_action('wp_enqueue_scripts', 'load_css');

// Load js
function load_js(){
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');
    wp_enqueue_script( 'aos', get_template_directory_uri().'/js/aos.js', array('jquery'), '2.1.1', true); 		
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme option
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu',
        'footer-menu' => 'Footer Menu',
    )
);

function add_additional_class_on_li($classes, $item, $args) {
    // if(isset($args->add_li_class)) {
    //     $classes[] = $args->add_li_class;
    // }
    if('top-menu' === $args->theme_location) {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($classes, $item, $args) {
    if('top-menu' === $args->theme_location) {
        if (empty($atts['href'])) {
            $atts['href'] = !empty($item->url) ? $item->url : '#';
        }
        
        $atts['class'] = 'nav-link btn btn-primary text-white px-3 rounded-pill text-uppercase';
        
        // Check if the menu item is the current page and add the 'active' class
        if (in_array('current-menu-item', $item->classes) || in_array('current-page-item', $item->classes)) {
            $atts['class'] .= ' active'; // Add 'active' class if it's the current page
        }
    }
    if('footer-menu' === $args->theme_location) {
        if (empty($atts['href'])) {
            $atts['href'] = !empty($item->url) ? $item->url : '#';
        }
        
        $atts['class'] = 'nav-link footer-menu';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
<?php

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all');

    wp_enqueue_style('bootstrap');


    wp_register_style('style', get_template_directory_uri() . '/style.css',
        array(), false, 'all');

    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


add_action('wp_enqueue_scripts', 'register_myscripts_scripts');
function register_myscripts_scripts(){
    wp_enqueue_script('jquery'); 
    
    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script( 'bootstrap' );
    
    wp_register_script('collapse', get_stylesheet_directory_uri() . '/js/collapse.js', array(), false, true);
    wp_enqueue_script( 'collapse' );

}



function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');



function enqueue_fa_script(){
    wp_enqueue_script('fascript', 'https://kit.fontawesome.com/18903e3052.js');
}
add_action('wp_enqueue_scripts', 'enqueue_fa_script');

add_theme_support('menus');


register_nav_menus(
    #add menu location options in the dashboard
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





add_action( 'init', 'custom_post_type_func' );
function custom_post_type_func() {
    //posttypename = services
$labels = array(
'name' => _x( 'Services', 'services' ),
'singular_name' => _x( 'services', 'services' ),
'add_new' => _x( 'Add New', 'services' ),
'add_new_item' => _x( 'Add New services', 'services' ),
'edit_item' => _x( 'Edit services', 'services' ),
'new_item' => _x( 'New services', 'services' ),
'view_item' => _x( 'View services', 'services' ),
'search_items' => _x( 'Search services', 'services' ),
'not_found' => _x( 'No services found', 'services' ),
'not_found_in_trash' => _x( 'No services found in Trash', 'services' ),
'parent_item_colon' => _x( 'Parent services:', 'services' ),
'menu_name' => _x( 'Services', 'services' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Hi, this is my custom post type.',
'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);
register_post_type( 'services', $args );
}


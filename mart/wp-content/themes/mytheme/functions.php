<?php

function byron_register_nav_menus()
{
    //  Navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));
}
add_action('init', 'byron_register_nav_menus');


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_action('init', 'register_custom_posts_init');

function register_custom_posts_init(){
    $products_labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'menu_name' => 'Products'
    );
    $products_args = array(
        'labels' => $products_labels,
        'public' => true,
        'has_archive' => 'products',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
    );
    register_post_type('products', $products_args);
}

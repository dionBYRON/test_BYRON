<?php

function register_menu_locations()
{
    register_nav_menu('primary', __('Main menu', 'website-theme'));
}
add_action('after_setup_theme', 'register_menu_locations');

// Margin-top 32px !important remove
function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
add_action('get_header', 'remove_admin_login_header');

function mart_register_styles(){
        // Register Main stylesheet
        wp_register_style( 'main_style', get_stylesheet_directory_uri(). '/css/style.css' );
        wp_enqueue_style('main_style');

        // Register Main bootstrap stylesheet
        wp_register_style('main_bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css','4');
        wp_enqueue_style('main_bootstrap');

        // Register JQuery
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], '3.3.1');
        wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'mart_register_styles');
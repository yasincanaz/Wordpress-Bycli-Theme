<?php
function load_stylesheets(){
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css",array(),false,"all");
    wp_enqueue_style("bootstrap");
    wp_register_style("stylesheet",get_template_directory_uri()."/style.css",array(),false,"all");
    wp_enqueue_style("stylesheet");
}
add_action("wp_enqueue_scripts","load_stylesheets");
function load_scripts(){
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/script.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_style("script");
}
add_action("wp_enqueue_scripts","load_scripts");
add_theme_support("menus");
register_nav_menus(
    array(
    "top-menu"=> __("Top Menu","theme"),
    "footer-menu"=> __("Footer Menu","theme")
    ));
    add_theme_support("post-thumbnails");
    register_sidebar(
        array(
            "name"=>"page Slidebar",
            "id"=>"page-slidebar",
            "class"=>"slidebar"
        ));
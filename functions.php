<?php 

    function jbDigitalFiles() {
        wp_enqueue_style('resetcss', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('header', get_theme_file_uri('/css/header.css'));
    }

    add_action('wp_enqueue_scripts', 'jbDigitalFiles');

    function register_my_menus() {
    register_nav_menus( array(
        'top-nav' => 'Top Navigation Menu',
    ) );
    
    }

    add_action( 'after_setup_theme', 'register_my_menus' );



?>
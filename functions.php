<?php 

    function jbDigitalFiles() {
        wp_enqueue_style('resetcss', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('header', get_theme_file_uri('/css/header.css'));
        wp_enqueue_style('front-page', get_theme_file_uri('/css/front-page.css'));
        wp_enqueue_script(
            'mytheme-mobile-menu',                // Handle
            get_template_directory_uri() . '/js/navigation.js', // Path
            array(),                              // Dependencies (none)
            wp_get_theme()->get('Version'),       // Version (auto from theme version)
            true                                  // Load in footer (best for performance)
    );

    }

    add_action('wp_enqueue_scripts', 'jbDigitalFiles');

    function register_my_menus() {
    register_nav_menus( array(
        'top-nav' => 'Top Navigation Menu',
    ) );
    
    }

    add_action( 'after_setup_theme', 'register_my_menus' );



?>
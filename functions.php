<?php

    function custom_theme_support() {
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
    //テーマサポート
    add_theme_support('post-thumbnails');
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    register_nav_menus(array(
        'footer_nav'=> esc_html__('footer navigation', 'footer navigation'),
        'category_nav'=> esc_html__('category navigation', 'category navigation'),
        'hamburger_nav'=> esc_html__('hamburger', 'hamburger'),
        'sidemenu_nav'=> esc_html__('sidemenu', 'sidemenu'),
        'drink_nav'=> esc_html__('drink', 'drink'),

    ));
    add_theme_support('editor-styles');
    add_editor_style();

    add_action('after_setup_theme', 'custom_theme_support');

    //タイトル出力
    function website_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'website_title' );

    //CSSスタイル
    function hamburger_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'hamuberger-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );


    //Font Awesome
    function enqueue_font_awesome() {
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/4a8de40053.js', array(), null, true);
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_font_awesome');
    
    //Google Fonts Icon
    function enqueue_google_fonts_icons() {
        wp_enqueue_style('google-fonts-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_google_fonts_icons');
    


    //jQueryファイル
    function enqueue_custom_script() {
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/main.js', array('jquery'), '1.0.0', true);
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_custom_script');
    
    // 通常の投稿のみを検索対象にする
    function exclude_pages_from_search($query) {
        if ( !is_admin() && $query->is_main_query() && $query->is_search ) {
            $query->set('post_type', 'post'); 
        }
    }
    add_action('pre_get_posts', 'exclude_pages_from_search');

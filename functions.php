<?php 


/******************
 * Enqueue Scripts
 */
function theme_scripts(){
    
    /***** Normalize styles *****/
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri().'/assets/css/normalize.css' );
    /***** Bootstrap styles *****/
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css' );
    /***** Slick styles *****/
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri().'/assets/css/slick.css' );
    /***** Fontawesome styles *****/
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css' );
    /***** Theme styles *****/
    wp_enqueue_style( 'theme', get_stylesheet_uri() );

    /***** Bootstrap Script *****/
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.2.1', true );
    /***** Slick Script *****/
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri().'/assets/js/slick.js', array('jquery'), '2.0.0', true );
    /***** Parallax Script *****/
    wp_enqueue_script( 'parallax', get_stylesheet_directory_uri().'/assets/js/parallax.min.js', array('jquery'), '1.0.0', true );
    /***** Theme Main Script *****/
    wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/*********************
 * Theme Setup
 */
function theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');

    /* Register main primary menu */
    register_nav_menu('primary', 'Primary menu');
}
add_action( 'after_setup_theme', 'theme_setup' );

/***********************
 * Register Widget
 */
function theme_widgets(){
    /* Sidebar Widget Area */
    register_sidebar( array(
        'name'          =>  __('Blog sidebar Widget Area','beewp'),
        'description'   =>  'Blog sidebar widget area',
        'id'            =>  'sidebar',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 1 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 1','beewp'),
        'description'   =>  'footer widget area 1',
        'id'            =>  'footer-1',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 2 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 2','beewp'),
        'description'   =>  'footer widget area 2',
        'id'            =>  'footer-2',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 3 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 3','beewp'),
        'description'   =>  'footer widget area 3',
        'id'            =>  'footer-3',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 4 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 4','beewp'),
        'description'   =>  'footer widget area 4',
        'id'            =>  'footer-4',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
}
add_action( 'widgets_init', 'theme_widgets' );

/**********************
 * Include walker class
 */
require ( 'inc/custom-walker.php' );

/***********************
 * Redux framework
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/lib/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/lib/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/lib/ReduxFramework/config/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/lib/ReduxFramework/config/config.php' );
}
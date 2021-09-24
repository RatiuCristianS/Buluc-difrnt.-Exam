<?php
/* 1.Adăugăm Style + JavaScript */
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'tailwind', get_template_directory_uri().'/includes/style.css' );

    wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js');
    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/includes/burger-menu.js');

}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
/* 1-End */

/* 2.Header Menu + Footer Menu */
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
/* 2-End */


/* 3.Adaugă Logo */
function buluc_custom_logo_setup() {
  $defaults = array(
      'height'               => 100,
      'width'                => 100,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'buluc_custom_logo_setup' );
/* 3-End */

/* 4.Adaugă suport thumbnail pentru următoarele CPT */
add_theme_support( 'post-thumbnails', array( 'spectacole','proiecte','oameni' ) ); 
/* 4-End */
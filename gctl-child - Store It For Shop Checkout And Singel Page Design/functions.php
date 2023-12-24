<?php


/**
 * 
 * 
 *Global Section ============================================================================
 *  
 * 
**/

//Register a Menu. This menu is become primary menu.
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
    );
}
add_action( 'init', 'register_my_menus' );




//add css and js in child theme

function my_theme_enqueue_styles() { 
    $parent_style = 'gctl'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('1.0.0') );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );





// Add css link ..................................................................
// add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
// function my_theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
// }






//add theme support.
// ai function child theme er functions.php file e na likle woocommerce plugin er templates file copy kore j child theme e rakha hoyese and rename kore woocommerce name doya hoyese tar vitore j file ase tar upor kono provab porbe na, karon ai function na likle page child theme tkehe show e korbe na. 
function customtheme_add_woocommerce_support(){
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );



// This function work to allow shortcode in widget for show product
add_filter('widget_text', 'do_shortcode');



//Create widgets for show product in home page
function gctl_widgets_show_product_in_home_page() {
  register_sidebar( array(
      'name' => __( 'Show Product In Home Page', 'gctl-child' ),
      'id' => 'show_product_1',
      'description' => __( 'Add text bar and shortcode here to show product in home page', 'gctl' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
  ) );
}
add_action( 'widgets_init', 'gctl_widgets_show_product_in_home_page' );





/**
 * 
 * 
 *Shop Page ============================================================================
 *  
 * 
**/


 //Change number or products per row to 3

add_filter('loop_shop_columns', 'loop_columns');

if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3;
	}
}



//Change number of products that are displayed per page (shop page)
 
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  $cols = 9;
  return $cols;
}






/**
 * 
 * 
 *Single Product Page ============================================================================
 *  
 * 
**/

//1st remove and next add product_data_tabs in one place to another place.

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_product_meta_end', 'woocommerce_output_product_data_tabs', 10 );









/**
 * 
 * 
 * Checkout Page ============================================================================
 *  
 * 
**/


//Remove Have a coupon?
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
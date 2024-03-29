<?php
/**
 * From Below Studio Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since From Below Studio Theme 1.0
 */

/**
 * From Below Studio Theme only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'frombelowstudiotheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own frombelowstudiotheme_setup() function to override in a child theme.
 *
 * @since From Below Studio Theme 1.0
 */
function frombelowstudiotheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/frombelowstudiotheme
	 * If you're building a theme based on From Below Studio Theme, use a find and replace
	 * to change 'frombelowstudiotheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'frombelowstudiotheme' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since From Below Studio Theme 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'frombelowstudiotheme' ),
		'social'  => __( 'Social Links Menu', 'frombelowstudiotheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', frombelowstudiotheme_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // frombelowstudiotheme_setup
add_action( 'after_setup_theme', 'frombelowstudiotheme_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since From Below Studio Theme 1.0
 */
function frombelowstudiotheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'frombelowstudiotheme_content_width', 840 );
}
add_action( 'after_setup_theme', 'frombelowstudiotheme_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since From Below Studio Theme 1.0
 */
function frombelowstudiotheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'frombelowstudiotheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'frombelowstudiotheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'frombelowstudiotheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'frombelowstudiotheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'frombelowstudiotheme' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'frombelowstudiotheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'frombelowstudiotheme_widgets_init' );

if ( ! function_exists( 'frombelowstudiotheme_fonts_url' ) ) :
/**
 * Register Google fonts for From Below Studio Theme.
 *
 * Create your own frombelowstudiotheme_fonts_url() function to override in a child theme.
 *
 * @since From Below Studio Theme 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function frombelowstudiotheme_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'frombelowstudiotheme' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'frombelowstudiotheme' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'frombelowstudiotheme' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since From Below Studio Theme 1.0
 */
function frombelowstudiotheme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'frombelowstudiotheme_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since From Below Studio Theme 1.0
 */
function frombelowstudiotheme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'frombelowstudiotheme-fonts', frombelowstudiotheme_fonts_url(), array(), null );

	wp_deregister_script( 'jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js');
	wp_enqueue_script('instafeedjs', get_template_directory_uri(). '/js/instafeed.js');
	wp_enqueue_script('modalopen', get_template_directory_uri(). '/js/modal-open.js');
	wp_enqueue_script('elementmoving', get_template_directory_uri(). '/js/element-moving.js');
	
	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'frombelowstudiotheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js');

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'frombelowstudiotheme-ie', get_template_directory_uri() . '/css/ie.css', array( 'frombelowstudiotheme-style' ), '20160816' );
	wp_style_add_data( 'frombelowstudiotheme-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'frombelowstudiotheme-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'frombelowstudiotheme-style' ), '20160816' );
	wp_style_add_data( 'frombelowstudiotheme-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'frombelowstudiotheme-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'frombelowstudiotheme-style' ), '20160816' );
	wp_style_add_data( 'frombelowstudiotheme-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'frombelowstudiotheme-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'frombelowstudiotheme-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'frombelowstudiotheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );
	wp_enqueue_script( 'dom', get_template_directory_uri() . '/js/dom.js', array( 'jquery' ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'frombelowstudiotheme-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}
	$current_user = wp_get_current_user();
	if (user_can( $current_user, 'administrator' )) {
	  // user is an admin
		wp_enqueue_style( 'adminlogged-in', get_template_directory_uri() . '/adminlogged-in.css');
	}

	wp_enqueue_script( 'frombelowstudiotheme-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'frombelowstudiotheme-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'frombelowstudiotheme' ),
		'collapse' => __( 'collapse child menu', 'frombelowstudiotheme' ),
	) );


	wp_enqueue_script( 'webflowjs', get_template_directory_uri(). '/js/webflow.js');

}
add_action( 'wp_enqueue_scripts', 'frombelowstudiotheme_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since From Below Studio Theme 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function frombelowstudiotheme_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'frombelowstudiotheme_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since From Below Studio Theme 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function frombelowstudiotheme_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since From Below Studio Theme 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function frombelowstudiotheme_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'frombelowstudiotheme_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since From Below Studio Theme 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function frombelowstudiotheme_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'frombelowstudiotheme_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since From Below Studio Theme 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function frombelowstudiotheme_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'frombelowstudiotheme_widget_tag_cloud_args' );

//Woocommerce Edits

// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

// function my_theme_wrapper_start() {
//   echo '<section id="fuckkevindurant">';
// }

// function my_theme_wrapper_end() {
//   echo '</section>';
// }



//WooCommerce Support Declation - useless

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//change added to cart message

add_filter('wc_add_to_cart_message', 'handler_function_name', 10, 2);
function handler_function_name($message, $product_id) {
    return "You added a booking session"; //. $product_id ;
}


//All Products Go Straight to Cart - Need only the Booking to go to cart

add_filter('add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');
function themeprefix_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = $woocommerce->cart->get_checkout_url();
 return $checkout_url;
}

// Hook in
function wc_empty_cart_redirect_url() {
    return home_url(); //$_SERVER['HTTP_REFERER'];
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );


// Custom Empty Cart Message
function custom_wc_empty_cart_message() {
  echo '<h1 class="heading-13">' . wp_kses_post( __("There's nothing here.", 'woocommerce')) . '</h1>' . '<p class="text-block-9-centered">' .  wp_kses_post( __( "Try booking a session to get started.", 'woocommerce' ) ) . '</p>';;
}

add_filter( 'wc_empty_cart_message', 'custom_wc_empty_cart_message' );

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {

	 $fields['order']['order_comments']['placeholder'] = 'Tell Me About Your Project';
	 $fields['order']['order_comments']['label'] = '';
	 $fields['billing']['billing_first_name']['label'] = '';
	 $fields['billing']['billing_first_name']['placeholder'] = 'First Name';
	 $fields['billing']['billing_first_name']['autofocus'] = false;
	 $fields['billing']['billing_first_name']['id'] = "juelz";
	 $fields['billing']['billing_last_name']['label'] = '';
	 $fields['billing']['billing_last_name']['placeholder'] = 'Last Name';
	 $fields['billing']['billing_phone']['label'] = '';	
	 $fields['billing']['billing_phone']['placeholder'] = 'Phone Number';
	 $fields['billing']['billing_email']['label'] = '';
	 $fields['billing']['billing_email']['placeholder'] = 'Enter Your Email';
	 $fields['billing']['billing_company']['placeholder'] = 'Company Name';
	 $fields['billing']['billing_company']['label'] = '';
	 $fields['billing']['billing_address_1']['placeholder'] = 'Billing Address';
	 $fields['billing']['billing_address_1']['label'] = '';
	 $fields['billing']['billing_city']['placeholder'] = 'City';
	 $fields['billing']['billing_city']['label'] = '';
	 $fields['billing']['billing_postcode']['placeholder'] = 'Zip Code';
	 $fields['billing']['billing_postcode']['label'] = '';
	 //$fields['account']['account_username']['placeholder'] = 'Enter your email';
	 $fields['account']['account_password']['placeholder'] = 'Choose a secure password';
	 $fields['account']['account_password']['label'] = '';
	unset($fields['account']['account_password-2']);
	 //$fields['account']['account_password-2']['placeholder'] = 'Re-enter your secure password';
     //unset($fields['billing']['billing_first_name']);
     //unset($fields['billing']['billing_last_name']);
     //unset($fields['billing']['billing_company']);
     //unset($fields['billing']['billing_address_1']);
     //unset($fields['billing']['billing_address_2']);
     //unset($fields['billing']['billing_city']);
     //unset($fields['billing']['billing_postcode']);
     //unset($fields['billing']['billing_country']);
     //unset($fields['billing']['billing_state']);
     //unset($fields['account']['account_email']);
     //unset($fields['account']['account_password']);
     //unset($fields['billing']['billing_email']);
     return $fields;
}

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

function iconic_bypass_logout_confirmation() {
    global $wp;
 
    if ( isset( $wp->query_vars['customer-logout'] ) ) {
        wp_redirect( str_replace( '&amp;', '&', wp_logout_url( wc_get_page_permalink( 'myaccount' ) ) ) );
        exit;
    }
}
 
add_action( 'template_redirect', 'iconic_bypass_logout_confirmation' );

add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
	if ( isset( $_GET['clear-cart'] ) ) {
		global $woocommerce;
		$woocommerce->cart->empty_cart();
	}
}

/**
 * Remove the breadcrumbs 
 */
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


//add_filter("woocommerce_checkout_fields", "order_fields");

// function order_fields($fields) {

//     $order = array(
//         "account_username", 
//         "account_password-2",
//         "account_password", 
//         //"billing_first_name",
         
//     );
//     foreach($order as $field)
//     {
//         $ordered_fields[$field] = $fields["account"][$field];
//     }

//     $fields["account"] = $ordered_fields;
//     return $fields;

// }




<?php

require_once( __DIR__ . '/functions/wp_childpages.php');
require_once( __DIR__ . '/functions/wp_information.php');
require_once( __DIR__ . '/functions/wp_services.php');
require_once( __DIR__ . '/functions/wp_custom_blocks.php');
//wp_custom_blocks
//wp_gutenberg_editor
require_once( __DIR__ . '/functions/wp_gutenberg_editor.php');


function wpb_add_new_fonts() {
	
	//wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com', false );
	// wp_enqueue_style( 'wpb-roca-fonts', get_template_directory_uri() . '/assets/fonts/RocaTwo-Bold.woff', false );
	// wp_enqueue_style( 'wpb-roustel-fonts', get_template_directory_uri() . '/assets/fonts/Roustel-Regular.woff', false );	//wp_enqueue_style( 'wpb-blick-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap', false );
	wp_enqueue_style( 'wpb-plain-fonts', 'https://use.typekit.net/ucl7bjh.css', false );
	}
    add_action( 'wp_enqueue_scripts', 'wpb_add_new_fonts' );


function load_stylesheets()
{
  // wp_register_style('adobe-font', '//use.typekit.net/zgv5gua.css');
	// wp_enqueue_style('adobe-font');
	wp_register_style('extras', get_template_directory_uri() . '/assets/css/extras.min.css', rand(100,999));
    wp_enqueue_style('extras');
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/style.min.css', rand(100,999));
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function smartwp_remove_wp_block_library_css(){
 //wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-block-style' );
 //wp_dequeue_style( 'custom' 
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

function load_js()
{
	wp_register_script('scriptjs', get_template_directory_uri() . '/assets/js/script.min.js', '', rand(100,999), true);
	wp_register_script('slider', get_template_directory_uri() . '/assets/js/slider.min.js', '', rand(100,999), true);
	wp_enqueue_script( 'scrollscript', get_template_directory_uri() . '/assets/js/scrollScript.min.js', array(), rand(100,999), true );
    wp_enqueue_script('scriptjs');
	wp_enqueue_script('slider');
}
add_action('wp_enqueue_scripts', 'load_js', 99);

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

add_action('wp_enqueue_scripts', 'load_js');

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
       )
);


 function mytheme_setup() {
   add_theme_support( 'custom-logo', array(
		'height'      => 100,
	    'width'       => 400,
	    'flex-height' => true,
	    'flex-width'  => true,
) );
 }

 add_action('after_setup_theme', 'mytheme_setup');


add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'img-fluid', $html );
    $html = str_replace( 'custom-logo-link', 'img-fluid', $html );

    return $html;
}



add_image_size('smallest', 300, 300, true);
add_image_size('Medium', 500, 500, true);
add_image_size('large', 1000, 800, true);
add_image_size('largest');


function custom_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'blazemedia' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'blazemedia' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
            'class' => 'list-group',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'blazemedia' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
            'class' => 'list-group',
		)
	);

    	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'blazemedia' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
            'class' => 'list-group',
		)
	);

    register_sidebar(
    		array(
			'name'          => __( 'Single Archive Sidebar', 'blazemedia' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Add widgets here to appear in your footer.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
            'class' => 'list-group col-primary',
		)
	);

     register_sidebar(
    		array(
			'name'          => __( 'Single Page Sidebar', 'blazemedia' ),
			'id'            => 'sidebar-6',
			'description'   => __( 'Add widgets here to appear in your footer.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
            'class' => 'list-group',
		)
	);

      register_sidebar(
    		array(
			'name'          => __( 'Nav Sidebar', 'blazemedia' ),
			'id'            => 'sidebar-7',
			'description'   => __( 'Add widgets here to appear in your navigation.', 'blazemedia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
            'class' => 'list-group',
		)
	);
}

add_action( 'widgets_init', 'custom_widgets_init' );

add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );

add_post_type_support( 'page', 'excerpt' );

function my_theme_archive_title( $title ) {
    $h1open = "<h1  class='text-left display-3' style='z-index: 100' data-trigger='titleTrigger' data-scroll-speed='+100'>";
    $h1close = "</h1>";
    $postby = "<p class='mb-0' style='z-index: 100' data-trigger='titleTrigger' data-scroll-speed='+100'>Showing Posts By</p>";
    $postfrom = "<p class='mb-0' style='z-index: 100' data-trigger='titleTrigger' data-scroll-speed='+100'>Showing Posts From</p>";
    $postin = "<p class='mb-0' style='z-index: 100' data-trigger='titleTrigger' data-scroll-speed='+100'>Showing Posts In</p>";

    if ( is_category() ) {
        $archive = single_cat_title( '', false );
        $title = $postin;
        $title .= $h1open . $archive. $h1close;
    } elseif ( is_tag() ) {
        $archive = single_tag_title( '', false );
        $title = $postfrom;
        $title .= $h1open . $archive. $h1close;
    } elseif ( is_author() ) {
        $archive = '<span class="vcard">' . get_the_author_meta( 'first_name')." ".get_the_author_meta( 'last_name') . '</span>';
        $title = single_term_title( '', false );
        $title = $postby;
        $title .= $h1open . $archive. $h1close;
    } elseif ( is_post_type_archive() ) {
        $archive = post_type_archive_title( '', false );
        $title = single_term_title( '', false );
        $title = $postfrom;
        $title .= $h1open . $archive. $h1close;
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
        $title = $postfrom;
        $title .= $h1open . $title. $h1close;

    }elseif ( is_date() ) {
        /* translators: Yearly archive title. %s: Year. */
        $date = get_the_date( _x( '', 'Y' ) );
        $title = $postfrom;
        $title .= $h1open . $date. $h1close;

    }

    return $title;
}


  function wpse74325_pre_get_posts( $query ) {
      if ( $query->is_main_query() && is_category( 5 ) ) {
          $query->set( 'posts_per_page', '20' );
      }
  }
  add_action( 'pre_get_posts', 'wpse74325_pre_get_posts' );

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
require_once( __DIR__ . '/functions/wp_category.php');
<?php

//if ( function_exists('register_sidebar') )
//    register_sidebar();

add_filter( 'image_strip_meta', function() {
 return true;
});

add_theme_support( 'title-tag' );

function code2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'code-2' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'code-2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'code2_widgets_init' );


function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu 1', 'code-2' ) )
  );
}

if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'aside' ) );

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );


function code2_scripts() {
wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );
wp_enqueue_style( 'code2-style', get_stylesheet_uri() );
wp_enqueue_script( 'code2-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20131209', true );
}

add_action( 'wp_enqueue_scripts', 'code2_scripts' );

add_theme_support( 'post-thumbnails' );

$markup = array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', );
add_theme_support( 'html5', $markup );	

add_filter( 'use_default_gallery_style', '__return_false' );

?>

<?php
 
function akv3_query_format_standard($query) {
	if (isset($query->query_vars['post_format']) &&
		$query->query_vars['post_format'] == 'post-format-standard') {
		if (($post_formats = get_theme_support('post-formats')) &&
			is_array($post_formats[0]) && count($post_formats[0])) {
			$terms = array();
			foreach ($post_formats[0] as $format) {
				$terms[] = 'post-format-'.$format;
			}
			$query->is_tax = null;
			unset($query->query_vars['post_format']);
			unset($query->query_vars['taxonomy']);
			unset($query->query_vars['term']);
			unset($query->query['post_format']);
			$query->set('tax_query', array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'post_format',
					'terms' => $terms,
					'field' => 'slug',
					'operator' => 'NOT IN'
				)
			));
		}
	}
}
add_action('pre_get_posts', 'akv3_query_format_standard');


function remove_header_info() {
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );         // for WordPress < 3.0
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' ); // for WordPress >= 3.0
}
add_action( 'init', 'remove_header_info' );

function gutenberg_my_block_init() {
    register_meta( 'post', 'author', array(
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'gutenberg_my_block_init' );


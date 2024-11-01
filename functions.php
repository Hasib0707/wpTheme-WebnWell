<?php
/**
 * webnwell functions and definitions
 *
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Register Custom Navigation Walker
 */
	function register_navwalker(){
		require_once get_template_directory() . '/class/class-wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'register_navwalker' );


function webnwell_setup() {
	
	load_theme_textdomain( 'webnwell', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'webnwell' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'webnwell' ),
		)
	);


	function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
		if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
				if ( array_key_exists( 'data-toggle', $atts ) ) {
						unset( $atts['data-toggle'] );
						$atts['data-bs-toggle'] = 'dropdown';
				}
		}
		return $atts;
}
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );

	
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'webnwell_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'webnwell_setup' );

function webnwell_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webnwell_content_width', 640 );
}
add_action( 'after_setup_theme', 'webnwell_content_width', 0 );


function webnwell_widgets() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'webnwell' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'webnwell' ),
			'before_widget' => '<section id="%1$s" class="widget sidebar-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="sidebar-widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'webnwell' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here for footer column 1.', 'webnwell' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'webnwell' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here for footer column 3.', 'webnwell' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'webnwell' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here for footer column 3.', 'webnwell' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'webnwell' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here for footer column 4.', 'webnwell' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'webnwell_widgets' );


function webnwell_scripts() {
	wp_enqueue_style( 'webnwell-theme-bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'webnwell-google-fonts', '//fonts.googleapis.com/css2?family=Inter:wght@700;900&family=Lato:wght@400;700&display=swap',  array(), _S_VERSION, 'all');
	wp_enqueue_style( 'webnwell-main-style', get_template_directory_uri(). '/assets/css/theme.css',  array(), _S_VERSION, 'all');
	wp_enqueue_style( 'webnwell-header-style', get_template_directory_uri(). '/assets/css/header-style.css',  array(), _S_VERSION, 'all');
	wp_enqueue_style( 'webnwell-fontawesome-style', get_template_directory_uri(). '/assets/css/all.min.css',  array(), _S_VERSION, 'all');
	wp_enqueue_style( 'webnwell-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'webnwell-style', 'rtl', 'replace' );

	wp_enqueue_script( 'webnwell-theme-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script('webnwell-Fontawesome-script', get_template_directory_uri().'/assets/js/all.min.js', array('jquery'), _S_VERSION, true);
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	webnwell_cta_btn();
	webnwell_cta_banner_bg();
	webnwell_gen_btn_color();
	webnwell_hero_btn_color();
	webnwell_p_color();
	webnwell_heading_color();
	webnwell_hero_color();
	webnwell_breadCrumb_margin();
  
}
add_action( 'wp_enqueue_scripts', 'webnwell_scripts' );


add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    return $fields;
}


add_action( 'wp_head', 'webnwell_cta_banner_bg', 11 );

require_once get_theme_file_path( '/inc/tgm.php' );
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/comments-helper.php';
require get_template_directory() . '/inc/comment-form.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-functions.php';
require get_template_directory() . '/inc/kirki.php';
require get_template_directory() . '/lib/option-panel.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Get Option Value for Redux Frameworks 
 */

 function get_option_value($key_id, $default = ''){
	if( class_exists('Redux') ) {
		return Redux::get_option('webnwell_theme_option', $key_id, $default);
	} else {
		return $default;
	}
 }
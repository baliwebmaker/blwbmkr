<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blwbmkr
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'blwbmkr_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.4.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0-RC4-53425', '<' ) || version_compare( PHP_VERSION_ID, '70400', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blwbmkr_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/min/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 */
	$styled_blocks = [
		'button',
		'code',
		'list',
		'latest-comments',
		'latest-posts',
		'navigation',
		'quote',
		'search',
		'separator',
		'site-title',
	];

	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "blwbmkr-$block_name",
			'src'    => get_theme_file_uri( "assets/css/min/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/min/blocks/$block_name.min.css" ),
		);
		wp_enqueue_block_style( "core/$block_name", $args );
	}

	/**
	 * Gutenberg 13.0 broke the loading of CSS in the Site Editor,
	 * this is a temporary(?) workaround.
	 */
	if ( function_exists( 'gutenberg_pre_init' ) ) {
		foreach ( $styled_blocks as $block_name ) {
			add_editor_style( "assets/css/min/blocks/$block_name.min.css" );
		}
	}
}
add_action( 'after_setup_theme', 'blwbmkr_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function blwbmkr_styles() {
	wp_enqueue_style(
		'blwbmkr-style',
		get_stylesheet_uri(),
		[],
		blwbmkr_VERSION
	);
	wp_enqueue_style(
		'blwbmkr-shared-styles',
		get_theme_file_uri( 'assets/css/min/style-shared.min.css' ),
		[],
		blwbmkr_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'blwbmkr_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block styles.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block variations.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block patterns.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// WooCommerce setup.
if ( class_exists( 'WooCommerce' ) ) {
	require_once get_theme_file_path( 'inc/woocommerce.php' );
}


define("THEME_NAME","blwbmkr");
function cptui_register_my_cpts_special() {

    /**
     * Post Type: specials.
     */

    $labels = [
        "name" => esc_html__( "specials", "blwbmkr" ),
        "singular_name" => esc_html__( "special", "blwbmkr" ),
    ];

    $args = [
        "label" => esc_html__( "specials", "blwbmkr" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => [ "slug" => "special", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type( "special", $args );
}

add_action( 'init', 'cptui_register_my_cpts_special' );

function register_tour_package(){
    
    $labels = array(
        'singular_name'=>__(  "Paket Wisata", THEME_NAME ),
        'add_new'=>__(  "Add New ", THEME_NAME ),
        'add_new_item'=>__(  "Tambah", THEME_NAME ),
        'new_item'=>__(  "Paket Baru", THEME_NAME ),
        'edit_item'=>__(  "Edit Paket Tour", THEME_NAME ),
        'all_items'=>__(  "Semua Tour Paket", THEME_NAME ),
        'search_items'=>__(  "Cari Paket Tour", THEME_NAME ),
        'not_found'=>__(  "Tidak ditemukan ", THEME_NAME ),
        'not_found_in_trash'=>__(  "Tidak di temukan di Trash", THEME_NAME ),
        'show_in_nav_menus'=> true,
        'menu_icon'  => 'dashicons-store',
    );
    $args = array(
            'label' => __( "Paket Tour", THEME_NAME ),
            'labels'=> $labels,
            'menu_icon'  => 'dashicons-store',
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'rest_base' => '',
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            'capability_type' => 'page',
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail','page-attributes','excerpt' ),
            // This is where we add taxonomies to our CPT
            'taxonomies' => array('post_tag','category'),
            'rewrite'=>array(
                'slug'=> _x('tour-package','Slug wording permalink',THEME_NAME),
                'with_front'=> false
            )
                    
    );
    register_post_type( 'tour-package', $args );
}

add_action( 'init', 'register_tour_package' );

function register_paket_promo(){
    
    $labels = array(
        'singular_name'=>__(  "Paket Promo", THEME_NAME ),
        'add_new'=>__(  "Add Promo ", THEME_NAME ),
        'add_new_item'=>__(  "Tambah", THEME_NAME ),
        'new_item'=>__(  "Paket Promo Baru", THEME_NAME ),
        'edit_item'=>__(  "Edit Paket Promo", THEME_NAME ),
        'all_items'=>__(  "Semua Paket", THEME_NAME ),
        'search_items'=>__(  "Cari Paket Promo", THEME_NAME ),
        'not_found'=>__(  "Tidak ditemukan ", THEME_NAME ),
        'not_found_in_trash'=>__(  "Tidak di temukan di Trash", THEME_NAME ),
        'show_in_nav_menus'=> true,
        'menu_icon'  => 'dashicons-store',
    );
    $args = array(
            'label' => __( "Paket Promo", THEME_NAME ),
            'labels'=> $labels,
            'menu_icon'  => 'dashicons-store',
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'page',
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array('title','editor','page-attributes','excerpt'),
            // This is where we add taxonomies to our CPT
            'taxonomies' => array('post_tag','category'),
			
            'rewrite'=>array(
                'slug'=> _x('paket-promo','Slug wording permalink',THEME_NAME),
                'with_front'=> false
            )
                    
    );
    register_post_type( 'paket-promo', $args );
}
add_action( 'init', 'register_paket_promo');

function rename_post_tag_function() {
    global $wp_taxonomies;
    $singular_name = 'Tour Tag';
    $plural_name = 'Tour Tags';
    $labels = array(
          'name'                    => $plural_name,
          'menu_name'               => $plural_name,
          'singular_name'           => $singular_name,
          'search_items'            => 'Search ' . $plural_name,
          'popular_items'           => 'Popular ' . $plural_name,
          'all_items'               => 'All ' . $plural_name,
          'parent_item'             => null, // Tags aren't hierarchical
          'parent_item_colon'       => null,
          'edit_item'               => 'Edit ' . $singular_name,
          'view_item'               => 'View ' . $singular_name,
          'update_item'             => 'Update ' . $singular_name,
          'add_new_item'            => 'Add New ' . $singular_name,
          'new_item_name'           => 'New ' . $singular_name . ' Name',
          'separate_items_with_commas' => 'Separate ' . $plural_name . ' with commas',
          'add_or_remove_items'     => 'Add or remove ' . $plural_name,
          'back_to_items'           => '← Back to ' . $plural_name,
     );    
    $wp_taxonomies['post_tag']->labels = (object) array_merge( (array) $wp_taxonomies['post_tag']->labels, $labels );
}
add_action( 'init', 'rename_post_tag_function');


add_action( 'admin_notices', function() {
 
    
} );

if ( ! function_exists( 'site_setup' ) ) :
    /**
    *  @since Villagjls 1.0
    */
    function site_setup() {
        register_nav_menus( array(
            'topmenu'   => __( 'Top Menu', THEME_NAME ),
            'mobile'   => __( 'Mobile Menu', THEME_NAME ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'site_setup' );

//DROP DOWN SUBMENU IN MOBILE
function add_nav_top_mobile( $content, array $block ) {
  if ( ! has_classname( 'is-nav-top-mobile', $block )  ) {
    return $content;
  }
    $script = "<script>
    const items = document.querySelectorAll('.is-nav-top-mobile button');
    items[0].addEventListener('click', e => {
    e.target.nextElementSibling.style.display = 'block';
    });

    function openWoi(e){
        if (e.style.maxHeight){
                  e.style.maxHeight = null;
                } else {
                  e.style.maxHeight = e.scrollHeight + 'px';
        } 
    }

    var coll = document.getElementsByClassName('wp-block-navigation-submenu__toggle');

    var i;
    for (i = 0; i < coll.length; i++) {


    coll[i].previousElementSibling.addEventListener('click', function()  { 
        this.nextElementSibling.classList.toggle('active');
        openWoi(this.nextElementSibling.nextElementSibling);
        }
    )

    coll[i].addEventListener('click', function() { 
        this.classList.toggle('active');
        openWoi(this.nextElementSibling);
      });
    }
    </script>";

    add_action( 'wp_footer', function() use($script) { echo $script; } , 100);

    return $content;
}
add_filter( 'render_block', 'add_nav_top_mobile', 10, 2 );

function has_classname( string $classname, array $block ):  bool {
  if ( empty( $block['attrs'] ) ) {
    return false;
  }
  $block = $block['attrs'];
  if ( empty( $block['className'] ) ) {
    return false;
  }
  $classes = explode( ' ', $block['className'] );
  return in_array( $classname, $classes, true );
}


/*SHORTCODE*/
function shortcode_search_tour_form(){
    
    ob_start();
    get_template_part('patterns/search-tour-form');
    return ob_get_clean();

}
add_shortcode('search-tour-form', 'shortcode_search_tour_form');

function shortcode_search_tour(){
    
    ob_start();
    get_template_part('patterns/search-tour');
    return ob_get_clean();

}
add_shortcode('search-tour', 'shortcode_search_tour');

//insert this so CPT query available for category list
function custom_post_type_cat_filter($query) {
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category()) {
      $query->set( 'post_type', array( 'post', 'tour-package' ) );
    }
  }
}

add_action('pre_get_posts','custom_post_type_cat_filter');
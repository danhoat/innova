<?php
/**
 * Avadanta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Avadanta
 */

if( ! defined( 'ABSPATH' ) )
{
	exit;
}
define('INNOVA_URL', get_template_directory_uri() );
define('INNOVA_IMG_URL', INNOVA_URL.'/images/');
define('INNOVE_DIR', get_template_directory());
define('INNOVA_THEME_DIR',get_template_directory() );


require (  INNOVA_THEME_DIR.'/html.php');
require ( INNOVA_THEME_DIR.'/includes/theme.php');
require ( INNOVA_THEME_DIR.'/includes/shortcodes.php');
require ( INNOVA_THEME_DIR . '/customizer/innova-customizer.php' );

add_action('init','load_hook_elementor', 999);
function load_hook_elementor(){
    require(INNOVA_THEME_DIR.'/elementor/elementor-list-widget.php');
}


Class Inova_Theme{
    function __construct(){
        add_action( 'after_setup_theme', array($this, 'innove_setup_theme') );
        add_action('init', array($this, 'init_theme') );
        $this->theme_support();
        add_filter( 'excerpt_length', function(){return 100; });


    }
    function init_theme(){
        $this->theme_support();
        $this->setup_post_type();
    }
    function innove_setup_theme(){

        register_nav_menus( array(
            'header_menu' => __( 'Header Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );

    }
    function theme_support(){
        add_theme_support( 'custom-logo' );
        add_theme_support('widgets');
        add_theme_support( 'title-tag' );
        add_theme_support('post-thumbnails');
        add_theme_support( 'custom-logo', array(
            'width' => 170,
            'height'  => 61,
        ) );

        $args = array(
            'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
    add_theme_support( 'custom-header', $args );

    }
    function setup_post_type(){

        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Dự Án', 'Post Type General Name', 'twentythirteen' ),
            'singular_name'       => _x( 'Dự Án', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'Dự Án', 'twentythirteen' ),
            'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
            'all_items'           => __( 'Tất Cả Dự Án', 'twentythirteen' ),
            'view_item'           => __( 'View Dự Án', 'twentythirteen' ),
            'add_new_item'        => __( 'Thêm mới dự Án', 'twentythirteen' ),
            'add_new'             => __( 'Thêm mới dự án', 'twentythirteen' ),
            'edit_item'           => __( 'Sửa Dự Án', 'twentythirteen' ),
            'update_item'         => __( 'Update Dự Án', 'twentythirteen' ),
            'search_items'        => __( 'Search Dự Án', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

    // Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'Dự Án', 'twentythirteen' ),
            'description'         => __( 'Dự Án news and reviews', 'twentythirteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => 'du-an',
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            //'capability_type'     => 'page',
            'show_in_rest'        => true,

        );

    // Registering your Custom Post Type
    register_post_type( 'du-an', $args );

    $labels = array(
        'name' => _x( 'Danh Mục', 'taxonomy general name' ),
        'singular_name' => _x( 'Danh Mục', 'taxonomy singular name' ),
        'search_items' =>  __( 'Danh Mục' ),
        'all_items' => __( 'All Danh Mục' ),
        'parent_item' => __( 'Parent Subject' ),
        'parent_item_colon' => __( 'Parent Subject:' ),
        'edit_item' => __( 'Sửa Danh Mục' ),
        'update_item' => __( 'Cập Nhật' ),
        'add_new_item' => __( 'Thêm Danh Mục' ),
        'new_item_name' => __( 'Tên Danh Mục' ),
        'menu_name' => __( 'Danh Mục' ),
    );

// Now register the taxonomy
    register_taxonomy('danh-muc',array('du-an'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'danh-muc' ),
        ));

    }

}
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

$GLOBALS['innova'] = new Inova_Theme();
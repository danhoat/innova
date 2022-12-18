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


require_once(INNOVE_DIR.'/html.php');

Class Inova_Theme{
    function __construct(){
        add_action( 'after_setup_theme', array($this, 'innove_setup_theme') );
        add_action('init', array($this, 'init_theme') );
          $this->theme_support();
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
        add_theme_support('widgets');
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'height' => 480,
            'width'  => 720,
        ) );
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
            'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
            'add_new'             => __( 'Add New', 'twentythirteen' ),
            'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
            'update_item'         => __( 'Update Movie', 'twentythirteen' ),
            'search_items'        => __( 'Search Movie', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );

    // Set other options for Custom Post Type

        $args = array(
            'label'               => __( 'Dự Án', 'twentythirteen' ),
            'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
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

            // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'category' ),
        );

    // Registering your Custom Post Type
    register_post_type( 'du-an', $args );
}

}


$GLOBALS['innove'] = new Inova_Theme();
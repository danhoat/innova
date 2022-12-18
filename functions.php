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
}


$GLOBALS['innove'] = new Inova_Theme();
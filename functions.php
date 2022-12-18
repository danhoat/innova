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
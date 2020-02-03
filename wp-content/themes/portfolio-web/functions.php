<?php
/**
 * Portfolio Web functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 */

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';

//register a new widget class
require portfolio_web_file_directory('acmethemes/sidebar-widget/acme-test.php');


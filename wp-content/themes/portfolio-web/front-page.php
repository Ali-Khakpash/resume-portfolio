<?php
/**
 * The front-page template file.
 *
 * @package Acme Themes
 * @subpackage Portfolio Web
 * @since Portfolio Web 1.0.0
 */
get_header();

/**
 * portfolio_web_action_front_page hook
 * @since Portfolio Web 1.0.0
 *
 * @hooked portfolio_web_featured_slider -  10
 * @hooked portfolio_web_front_page -  20
 */
do_action( 'portfolio_web_action_front_page' );


get_footer();

//options example
$opt = get_option('theme_mods_twentyseventeen');
add_option('asss', array('ass'=>'big', 'sample'=>'Nateghi'));
update_option('asss', array('ass'=>'tight', 'sample'=>'Nateghi'));
var_dump($opt);



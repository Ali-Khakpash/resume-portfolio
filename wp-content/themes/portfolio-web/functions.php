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
require portfolio_web_file_directory('acmethemes/sidebar-widget/acme-myProjects.php');


// ------------------------------------------------------------------
// Add menu, sub_menu to admin menu
// ------------------------------------------------------------------
//
if( is_admin() ) {
	add_action( 'admin_menu', 'add_menu_to_admin_menu' );
}
function add_menu_to_admin_menu(){
//	// Add the top level menu page
//	add_menu_page( 'Ratings & Reviews settings', 'Ratings & Reviews', 'manage_options',
//		'rar-admin-menu' );
//// Add the first sub-page - overwrite default
//	add_submenu_page( 'rar-admin-menu', 'Ratings & Reviews - Dashboard', 'Dashboard',
//		'manage_options', 'rar-admin-menu', 'rar_create_admin_dashboard' );
//// Add more sub-pages
//	add_submenu_page( 'rar-admin-menu', 'Ratings & Reviews - View posts', 'View posts',
//		'manage_options', 'rar-admin-view-posts', 'rar_create_admin_view_posts' );

add_options_page('Ratings & Reviews settings', 'Ratings & Reviews', 'manage_options',
		'rar-settings-admin', 'rar_create_admin_page' );
}

function rar_create_admin_page(){
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>Ratings &amp; Reviews Settings</h2>
		<form action="options.php" method="post">
			<?php
			// This prints out all hidden setting fields
			settings_fields('rar_options');
			do_settings_sections('rar-settings-admin');
			submit_button(); ?>
		</form>
	</div>
	<?php
}


function rar_field_display_count() {
	$options = get_option( 'rar-options' );
	if ( isset( $options['display-count'] ) ) {
		$display_count = $options['display-count'];
	} else {
		$display_count = '';
	}
	echo '<input name="rar-options[display-count]" id="rar-display-count" type="text"
value="' . $display_count . '" />';
}

function rar_section_info() {
	echo '<p>Set the default outputs of the plugin</p>';
}
register_setting( 'rar_options', 'rar-options', 'rar_options_validate' );

if( is_admin() ) {
	add_action( 'admin_init', 'rar_register_options' );
}
function rar_register_options() {
	register_setting( 'rar_options', 'rar-options', 'rar_options_validate' );
	add_settings_section( 'rar-defaults', 'Defaults', 'rar_section_info', 'rar-settings-admin' );
	add_settings_field( 'display-count', 'Display count', 'rar_field_display_count',
		'rar-settings-admin', 'rar-defaults' );
}


function rar_create_admin_view_posts() {
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>View Posts</h2>
	</div>
	<?php
}





// ------------------------------------------------------------------
// Add all your sections, fields and settings during admin_init
// ------------------------------------------------------------------
//

function eg_settings_api_init() {
	// Add the section to reading settings so we can add our
	// fields to it
	add_settings_section(
		'test',
		'Example settings section in reading',
		'eg_setting_section_callback_function',
		'rar-settings-admin'
	);

	// Add the field with the names and function to use for our new
	// settings, put it in our new section
	add_settings_field(
		'test',
		'Example setting Name',
		'eg_setting_callback_function',
		'rar-settings-admin',
		'eg_setting_section'
	);

	// Register our setting so that $_POST handling is done for us and
	// our callback function just has to echo the <input>
	register_setting( 'rar-settings-admin', 'eg_setting_name' );
} // eg_settings_api_init()

add_action( 'admin_init', 'eg_settings_api_init' );


// ------------------------------------------------------------------
// Settings section callback function
// ------------------------------------------------------------------
//
// This function is needed if we added a new section. This function
// will be run at the start of our section
//

function eg_setting_section_callback_function() {
	echo '<p>Intro text for our settings section</p>';
}

// ------------------------------------------------------------------
// Callback function for our example setting
// ------------------------------------------------------------------
//
// creates a checkbox true/false option. Other types are surely possible
//

function eg_setting_callback_function() {
	echo '<input name="test" id="test" type="checkbox" value="1" class="code" ' . checked( 1, get_option( 'eg_setting_name' ), false ) . ' /> Explanation text';
}





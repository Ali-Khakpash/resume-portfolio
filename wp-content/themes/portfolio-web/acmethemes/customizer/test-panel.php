<?php
/*adding footer options panel*/
$wp_customize->add_panel( 'portfolio-web-test-panel', array(
    'priority'       => 35,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'test panelll', 'portfolio-web' ),
    'description'    => esc_html__( 'Customize your awesome site cvcv ', 'portfolio-web' )
) );


/*adding sections for feature info options */
$wp_customize->add_section( 'portfolio-web-test-info', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'test Info', 'portfolio-web' ),
    'panel'          => 'portfolio-web-test-panel'
) );


$wp_customize->add_setting( 'portfolio_web_theme_options[portfolio-web-enable-header-test]', array(
    'capability'		        => 'edit_theme_options',
    'sanitize_callback'         => 'portfolio_web_sanitize_checkbox'
) );
$wp_customize->add_control( 'portfolio_web_theme_options[portfolio-web-enable-header-test]', array(
    'label'		                => esc_html__( 'sdsddd', 'portfolio-web' ),
    'section'                   => 'portfolio-web-test-info',
    'settings'                  => 'portfolio_web_theme_options[portfolio-web-enable-header-test]',
    'type'	  	                => 'text'
) );



$wp_customize->add_setting( 'portfolio_web_theme_options[portfolio-web-enable-header-testt]', array(
    'capability'		        => 'edit_theme_options',
    'sanitize_callback'         => 'portfolio_web_sanitize_checkbox'
) );
$wp_customize->add_control( 'portfolio_web_theme_options[portfolio-web-enable-header-testst]', array(
    'label'		                => esc_html__( 'sec', 'portfolio-web' ),
    'section'                   => 'portfolio-web-test-info',
    'settings'                  => 'portfolio_web_theme_options[portfolio-web-enable-header-test]',
    'type'	  	                => 'text'
) );

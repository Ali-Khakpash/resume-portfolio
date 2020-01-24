<?php
/*adding sections for feature info options */
$wp_customize->add_section( 'portfolio-web-test-info', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'tset Infox', 'portfolio-web' ),
    'panel'          => 'portfolio-web-header-panel'
) );


/*header top enable*/
$wp_customize->add_setting( 'portfolio_web_theme_options[portfolio-web-enable-header-test]', array(
    'capability'		        => 'edit_theme_options',
    'sanitize_callback'         => 'portfolio_web_sanitize_checkbox'
) );
$wp_customize->add_control( 'portfolio_web_theme_options[portfolio-web-enable-header-test]', array(
    'label'		                => esc_html__( 'sdsdd', 'portfolio-web' ),
    'section'                   => 'portfolio-web-test-info',
    'settings'                  => 'portfolio_web_theme_options[portfolio-web-enable-header-test]',
    'type'	  	                => 'checkbox'
) );

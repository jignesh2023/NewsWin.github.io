<?php
/**
 * Breadcrumb
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'news-port' ),
		'panel' => 'news_port_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'news_port_enable_breadcrumb',
	array(
		'sanitize_callback' => 'news_port_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'news-port' ),
			'section' => 'news_port_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'news_port_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'news_port_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'news-port' ),
		'active_callback' => 'news_port_is_breadcrumb_enabled',
		'section'         => 'news_port_breadcrumb',
	)
);

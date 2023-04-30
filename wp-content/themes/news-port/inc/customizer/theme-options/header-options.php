<?php
/**
 * Header Options
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_header_options',
	array(
		'panel' => 'news_port_theme_options',
		'title' => esc_html__( 'Header Options', 'news-port' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'news_port_enable_topbar',
	array(
		'sanitize_callback' => 'news_port_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'news-port' ),
			'section' => 'news_port_header_options',
		)
	)
);

// Header Section - Advertisement.
$wp_customize->add_setting(
	'news_port_header_advertisement',
	array(
		'sanitize_callback' => 'news_port_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'news_port_header_advertisement',
		array(
			'label'    => esc_html__( 'Advertisement', 'news-port' ),
			'section'  => 'news_port_header_options',
			'settings' => 'news_port_header_advertisement',
		)
	)
);

// Header Section - Advertisement URL.
$wp_customize->add_setting(
	'news_port_header_advertisement_url',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'news_port_header_advertisement_url',
	array(
		'label'    => esc_html__( 'Advertisement URL', 'news-port' ),
		'section'  => 'news_port_header_options',
		'settings' => 'news_port_header_advertisement_url',
		'type'     => 'url',
	)
);

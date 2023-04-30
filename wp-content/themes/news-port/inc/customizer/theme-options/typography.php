<?php
/**
 * Typography
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_typography',
	array(
		'panel' => 'news_port_theme_options',
		'title' => esc_html__( 'Typography', 'news-port' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'news_port_site_title_font',
	array(
		'default'           => 'Martel',
		'sanitize_callback' => 'news_port_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_port_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'news-port' ),
		'section'  => 'news_port_typography',
		'settings' => 'news_port_site_title_font',
		'type'     => 'select',
		'choices'  => news_port_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'news_port_site_description_font',
	array(
		'default'           => 'Merriweather',
		'sanitize_callback' => 'news_port_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_port_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'news-port' ),
		'section'  => 'news_port_typography',
		'settings' => 'news_port_site_description_font',
		'type'     => 'select',
		'choices'  => news_port_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'news_port_header_font',
	array(
		'default'           => 'Martel',
		'sanitize_callback' => 'news_port_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_port_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'news-port' ),
		'section'  => 'news_port_typography',
		'settings' => 'news_port_header_font',
		'type'     => 'select',
		'choices'  => news_port_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'news_port_body_font',
	array(
		'default'           => 'Merriweather',
		'sanitize_callback' => 'news_port_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'news_port_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'news-port' ),
		'section'  => 'news_port_typography',
		'settings' => 'news_port_body_font',
		'type'     => 'select',
		'choices'  => news_port_get_all_google_font_families(),
	)
);

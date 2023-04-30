<?php
/**
 * Sidebar Position
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'news-port' ),
		'panel' => 'news_port_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'news_port_sidebar_position',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_port_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'news-port' ),
		'section' => 'news_port_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-port' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-port' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-port' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'news_port_post_sidebar_position',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_port_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'news-port' ),
		'section' => 'news_port_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-port' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-port' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-port' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'news_port_page_sidebar_position',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_port_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'news-port' ),
		'section' => 'news_port_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-port' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-port' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-port' ),
		),
	)
);

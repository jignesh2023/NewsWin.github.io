<?php
/**
 * Archive Layout
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'news-port' ),
		'panel' => 'news_port_theme_options',
	)
);

// Archive Layout - Grid Style.
$wp_customize->add_setting(
	'news_port_archive_grid_style',
	array(
		'default'           => 'grid-column-3',
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_archive_grid_style',
	array(
		'label'   => esc_html__( 'Grid Style', 'news-port' ),
		'section' => 'news_port_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'grid-column-2' => __( 'Column 2', 'news-port' ),
			'grid-column-3' => __( 'Column 3', 'news-port' ),
		),
	)
);

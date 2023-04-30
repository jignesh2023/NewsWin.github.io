<?php
/**
 * Excerpt
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_excerpt_options',
	array(
		'panel' => 'news_port_theme_options',
		'title' => esc_html__( 'Excerpt', 'news-port' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'news_port_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	'news_port_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'news-port' ),
		'section'     => 'news_port_excerpt_options',
		'settings'    => 'news_port_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 200,
			'step' => 1,
		),
	)
);

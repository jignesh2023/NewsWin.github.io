<?php
/**
 * Pagination
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_pagination',
	array(
		'panel' => 'news_port_theme_options',
		'title' => esc_html__( 'Pagination', 'news-port' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'news_port_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'news-port' ),
			'section'  => 'news_port_pagination',
			'settings' => 'news_port_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

$wp_customize->add_setting(
	'news_port_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'news-port' ),
		'section'         => 'news_port_pagination',
		'settings'        => 'news_port_pagination_type',
		'active_callback' => 'news_port_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'news-port' ),
			'numeric' => __( 'Numeric', 'news-port' ),
		),
	)
);

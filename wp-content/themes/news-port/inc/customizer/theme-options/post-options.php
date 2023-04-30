<?php
/**
 * Post Options
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'news-port' ),
		'panel' => 'news_port_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'news_port_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'news-port' ),
			'section' => 'news_port_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'news_port_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'news-port' ),
			'section' => 'news_port_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'news_port_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'news-port' ),
			'section' => 'news_port_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'news_port_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'news-port' ),
			'section' => 'news_port_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'news_port_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'news-port' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_port_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'news-port' ),
		'section'  => 'news_port_post_options',
		'settings' => 'news_port_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'news_port_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'news-port' ),
			'section' => 'news_port_post_options',
		)
	)
);

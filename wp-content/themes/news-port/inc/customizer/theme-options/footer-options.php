<?php
/**
 * Footer Options
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_footer_options',
	array(
		'panel' => 'news_port_theme_options',
		'title' => esc_html__( 'Footer Options', 'news-port' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'news-port' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'news_port_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'news_port_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'news-port' ),
		'section'  => 'news_port_footer_options',
		'settings' => 'news_port_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'news_port_scroll_top',
	array(
		'sanitize_callback' => 'news_port_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'news-port' ),
			'section' => 'news_port_footer_options',
		)
	)
);

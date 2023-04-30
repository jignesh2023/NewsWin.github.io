<?php
/**
 * Flash News Section
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_flash_news_section',
	array(
		'panel' => 'news_port_front_page_options',
		'title' => esc_html__( 'Flash News Section', 'news-port' ),
	)
);

// Flash News Section - Enable Section.
$wp_customize->add_setting(
	'news_port_enable_flash_news_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_enable_flash_news_section',
		array(
			'label'    => esc_html__( 'Enable Flash News Section', 'news-port' ),
			'section'  => 'news_port_flash_news_section',
			'settings' => 'news_port_enable_flash_news_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'news_port_enable_flash_news_section',
		array(
			'selector' => '#news_port_flash_news_section .section-link',
			'settings' => 'news_port_enable_flash_news_section',
		)
	);
}

// Flash News Section - Section Title.
$wp_customize->add_setting(
	'news_port_flash_news_title',
	array(
		'default'           => __( 'Flash News', 'news-port' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_port_flash_news_title',
	array(
		'label'           => esc_html__( 'Section Title', 'news-port' ),
		'section'         => 'news_port_flash_news_section',
		'settings'        => 'news_port_flash_news_title',
		'type'            => 'text',
		'active_callback' => 'news_port_is_flash_news_section_enabled',
	)
);

// Flash News Section - Speed Controller.
$wp_customize->add_setting(
	'news_port_flash_news_speed_controller',
	array(
		'default'           => 600,
		'sanitize_callback' => 'news_port_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'news_port_flash_news_speed_controller',
	array(
		'label'           => esc_html__( 'Speed Controller', 'news-port' ),
		'description'     => esc_html__( 'Note: Default speed value is 600.', 'news-port' ),
		'section'         => 'news_port_flash_news_section',
		'settings'        => 'news_port_flash_news_speed_controller',
		'type'            => 'number',
		'input_attrs'     => array(
			'min' => 1,
		),
		'active_callback' => 'news_port_is_flash_news_section_enabled',
	)
);

// Flash News Section - Content Type.
$wp_customize->add_setting(
	'news_port_flash_news_content_type',
	array(
		'default'           => 'category',
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_flash_news_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'news-port' ),
		'section'         => 'news_port_flash_news_section',
		'settings'        => 'news_port_flash_news_content_type',
		'type'            => 'select',
		'active_callback' => 'news_port_is_flash_news_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'news-port' ),
			'category' => esc_html__( 'Category', 'news-port' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Flash News Section - Select Post.
	$wp_customize->add_setting(
		'news_port_flash_news_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_port_flash_news_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-port' ), $i ),
			'section'         => 'news_port_flash_news_section',
			'settings'        => 'news_port_flash_news_content_post_' . $i,
			'active_callback' => 'news_port_is_flash_news_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_port_get_post_choices(),
		)
	);

}

// Flash News Section - Select Category.
$wp_customize->add_setting(
	'news_port_flash_news_content_category',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_flash_news_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'news-port' ),
		'section'         => 'news_port_flash_news_section',
		'settings'        => 'news_port_flash_news_content_category',
		'active_callback' => 'news_port_is_flash_news_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => news_port_get_post_cat_choices(),
	)
);

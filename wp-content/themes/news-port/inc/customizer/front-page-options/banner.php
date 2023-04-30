<?php
/**
 * Banner Section
 *
 * @package News_Port
 */

$wp_customize->add_section(
	'news_port_banner_section',
	array(
		'panel' => 'news_port_front_page_options',
		'title' => esc_html__( 'Banner Section', 'news-port' ),
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'news_port_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_port_sanitize_switch',
	)
);

$wp_customize->add_control(
	new News_Port_Toggle_Switch_Custom_Control(
		$wp_customize,
		'news_port_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'news-port' ),
			'section'  => 'news_port_banner_section',
			'settings' => 'news_port_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'news_port_enable_banner_section',
		array(
			'selector' => '#news_port_banner_section .section-link',
			'settings' => 'news_port_enable_banner_section',
		)
	);
}

// Banner Section - Main Banner Title.
$wp_customize->add_setting(
	'news_port_main_banner_title',
	array(
		'default'           => __( 'Main News', 'news-port' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_port_main_banner_title',
	array(
		'label'           => esc_html__( 'Banner Title', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_main_banner_title',
		'type'            => 'text',
		'active_callback' => 'news_port_is_banner_slider_section_enabled',
	)
);

// Banner Section - Main Banner Slider Content Type.
$wp_customize->add_setting(
	'news_port_main_banner_slider_content_type',
	array(
		'default'           => 'category',
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_main_banner_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Banner Slider Content Type', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_main_banner_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'news_port_is_banner_slider_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'news-port' ),
			'category' => esc_html__( 'Category', 'news-port' ),
		),
	)
);

for ( $i = 1; $i <= 3; $i++ ) {
	// Banner Section - Select Main Banner Post.
	$wp_customize->add_setting(
		'news_port_main_banner_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_port_main_banner_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-port' ), $i ),
			'section'         => 'news_port_banner_section',
			'settings'        => 'news_port_main_banner_slider_content_post_' . $i,
			'active_callback' => 'news_port_is_banner_slider_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_port_get_post_choices(),
		)
	);

}

// Banner Section - Select Main Banner Category.
$wp_customize->add_setting(
	'news_port_main_banner_slider_content_category',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_main_banner_slider_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_main_banner_slider_content_category',
		'active_callback' => 'news_port_is_banner_slider_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => news_port_get_post_cat_choices(),
	)
);

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'news_port_banner_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new News_Port_Customize_Horizontal_Line(
		$wp_customize,
		'news_port_banner_horizontal_line',
		array(
			'section'         => 'news_port_banner_section',
			'settings'        => 'news_port_banner_horizontal_line',
			'active_callback' => 'news_port_is_banner_slider_section_enabled',
			'type'            => 'hr',
		)
	)
);

// Banner Section - Trending Title.
$wp_customize->add_setting(
	'news_port_trending_title',
	array(
		'default'           => __( 'Trending', 'news-port' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_port_trending_title',
	array(
		'label'           => esc_html__( 'Trending Title', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_trending_title',
		'type'            => 'text',
		'active_callback' => 'news_port_is_banner_slider_section_enabled',
	)
);

// Banner Section - Trending Slider Content Type.
$wp_customize->add_setting(
	'news_port_trending_slider_content_type',
	array(
		'default'           => 'category',
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_trending_slider_content_type',
	array(
		'label'           => esc_html__( 'Select Trending Content Type', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_trending_slider_content_type',
		'type'            => 'select',
		'active_callback' => 'news_port_is_banner_slider_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'news-port' ),
			'category' => esc_html__( 'Category', 'news-port' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Banner Section - Select Trending Post.
	$wp_customize->add_setting(
		'news_port_trending_slider_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'news_port_trending_slider_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'news-port' ), $i ),
			'section'         => 'news_port_banner_section',
			'settings'        => 'news_port_trending_slider_content_post_' . $i,
			'active_callback' => 'news_port_is_trending_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => news_port_get_post_choices(),
		)
	);

}

// Banner Section - Select Trending Category.
$wp_customize->add_setting(
	'news_port_trending_slider_content_category',
	array(
		'sanitize_callback' => 'news_port_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_port_trending_slider_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'news-port' ),
		'section'         => 'news_port_banner_section',
		'settings'        => 'news_port_trending_slider_content_category',
		'active_callback' => 'news_port_is_trending_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => news_port_get_post_cat_choices(),
	)
);

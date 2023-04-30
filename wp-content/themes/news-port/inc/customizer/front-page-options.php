<?php
/**
 * Front Page Options
 *
 * @package News Port
 */

$wp_customize->add_panel(
	'news_port_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'news-port' ),
		'priority' => 130,
	)
);

// Flash News Section.
require get_template_directory() . '/inc/customizer/front-page-options/flash-news.php';

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';

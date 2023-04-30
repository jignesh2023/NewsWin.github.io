<?php
/**
 * Theme Options
 *
 * @package News_Port
 */

$wp_customize->add_panel(
	'news_port_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'news-port' ),
		'priority' => 130,
	)
);

// Header Options.
require get_template_directory() . '/inc/customizer/theme-options/header-options.php';

// Typography.
require get_template_directory() . '/inc/customizer/theme-options/typography.php';

// Excerpt.
require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

// Breadcrumb.
require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

// Archive Layout.
require get_template_directory() . '/inc/customizer/theme-options/archive-layout.php';

// Sidebar Position.
require get_template_directory() . '/inc/customizer/theme-options/sidebar-position.php';

// Post Options.
require get_template_directory() . '/inc/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/inc/customizer/theme-options/footer-options.php';

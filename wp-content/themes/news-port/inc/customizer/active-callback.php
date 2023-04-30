<?php

/**
 * Active Callbacks
 *
 * @package News_Port
 */

// Theme Options.
function news_port_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_port_enable_pagination' )->value() );
}
function news_port_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_port_enable_breadcrumb' )->value() );
}

// Header Options.
function news_port_is_topbar_enabled( $control ) {
	return ( $control->manager->get_Setting( 'news_port_enable_topbar' )->value() );
}

// Flash News Section.
function news_port_is_flash_news_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_port_enable_flash_news_section' )->value() );
}
function news_port_is_flash_news_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_flash_news_content_type' )->value();
	return ( news_port_is_flash_news_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_port_is_flash_news_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_flash_news_content_type' )->value();
	return ( news_port_is_flash_news_section_enabled( $control ) && ( 'category' === $content_type ) );
}

// Banner Slider Section.
function news_port_is_banner_slider_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'news_port_enable_banner_section' )->value() );
}
function news_port_is_banner_slider_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_main_banner_slider_content_type' )->value();
	return ( news_port_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_port_is_banner_slider_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_main_banner_slider_content_type' )->value();
	return ( news_port_is_banner_slider_section_enabled( $control ) && ( 'category' === $content_type ) );
}

function news_port_is_trending_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_trending_slider_content_type' )->value();
	return ( news_port_is_banner_slider_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function news_port_is_trending_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_port_trending_slider_content_type' )->value();
	return ( news_port_is_banner_slider_section_enabled( $control ) && ( 'category' === $content_type ) );
}

<?php

// Posts Grid Widgets.
require get_template_directory() . '/inc/widgets/posts-grid-widget.php';

// Posts List Widgets.
require get_template_directory() . '/inc/widgets/posts-list-widget.php';

// Posts Tile Widgets.
require get_template_directory() . '/inc/widgets/posts-tile-widget.php';

// Posts Tile and List Widgets.
require get_template_directory() . '/inc/widgets/posts-tile-and-list-widget.php';

// Post Carousel Widgets.
require get_template_directory() . '/inc/widgets/posts-carousel-widget.php';

// Posts Small List Widgets.
require get_template_directory() . '/inc/widgets/posts-small-list-widget.php';

// Social Icons Widget.
require get_template_directory() . '/inc/widgets/social-icons-widget.php';

/**
 * Register Widgets
 */
function news_port_register_widgets() {

	register_widget( 'News_Port_Posts_Grid_Widget' );

	register_widget( 'News_Port_Posts_List_Widget' );

	register_widget( 'News_Port_Posts_Tile_Widget' );

	register_widget( 'News_Port_Posts_Tile_And_List_Widget' );

	register_widget( 'News_Port_Posts_Carousel_Widget' );

	register_widget( 'News_Port_Posts_Small_List_Widget' );

	register_widget( 'News_Port_Social_Icons_Widget' );

}
add_action( 'widgets_init', 'news_port_register_widgets' );

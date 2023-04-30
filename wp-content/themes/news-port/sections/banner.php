<?php
if ( ! get_theme_mod( 'news_port_enable_banner_section', false ) ) {
	return;
}

$slider_content_ids    = $editor_content_ids = $trending_content_ids = array();
$slider_content_type   = get_theme_mod( 'news_port_main_banner_slider_content_type', 'category' );
$trending_content_type = get_theme_mod( 'news_port_trending_slider_content_type', 'category' );

if ( $slider_content_type === 'post' ) {
	for ( $i = 1; $i <= 3; $i++ ) {
		$slider_content_ids[] = get_theme_mod( 'news_port_main_banner_slider_content_post_' . $i );
	}
	$banner_slider_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $slider_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 3 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id     = get_theme_mod( 'news_port_main_banner_slider_content_category' );
	$banner_slider_args = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 3 ),
	);
}
$banner_slider_args = apply_filters( 'news_port_main_banner_section_args', $banner_slider_args );

if ( $trending_content_type === 'post' ) {
	for ( $i = 1; $i <= 5; $i++ ) {
		$trending_content_ids[] = get_theme_mod( 'news_port_trending_slider_content_post_' . $i );
	}
	$trending_args = array(
		'post_type'           => 'post',
		'post__in'            => array_filter( $trending_content_ids ),
		'orderby'             => 'post__in',
		'posts_per_page'      => absint( 5 ),
		'ignore_sticky_posts' => true,
	);
} else {
	$cat_content_id = get_theme_mod( 'news_port_trending_slider_content_category' );
	$trending_args  = array(
		'cat'            => $cat_content_id,
		'posts_per_page' => absint( 5 ),
	);
}
$trending_args = apply_filters( 'news_port_main_banner_section_args', $trending_args );

news_port_render_banner_section( $banner_slider_args, $trending_args );

/**
 * Render Banner Section.
 */
function news_port_render_banner_section( $banner_slider_args, $trending_args ) {
	$main_banner_title = get_theme_mod( 'news_port_main_banner_title', __( 'Main News', 'news-port' ) );
	$trending_title    = get_theme_mod( 'news_port_trending_title', __( 'Trending', 'news-port' ) );
	?>

	<section id="news_port_banner_section" class="banner-section banner-section-with-trending">
		<?php
		if ( is_customize_preview() ) :
			news_port_section_link( 'news_port_banner_section' );
		endif;
		?>
		<div class="ascendoor-wrapper">
			<div class="banner-section-wrapper">
				<!-- Main Banner Slider Area -->
				<div class="slider-part">
					<?php if ( ! empty( $main_banner_title ) ) : ?>
						<div class="section-header">
							<h3 class="section-title"><?php echo esc_html( $main_banner_title ); ?></h3>
						</div>
						<?php
					endif;
					$banner_query = new WP_Query( $banner_slider_args );
					if ( $banner_query->have_posts() ) :
						?>
						<div class="magazine-slider-wrapper banner-slider magazine-carousel-slider-navigation">
							<?php
							while ( $banner_query->have_posts() ) :
								$banner_query->the_post();
								?>
								<div class="mag-post-single has-image tile-design">
									<div class="mag-post-img">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'full' ); ?>
										</a>
									</div>
									<div class="mag-post-detail">
										<div class="mag-post-category with-background">
											<?php news_port_categories_list( true ); ?>
										</div>
										<h3 class="mag-post-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<div class="mag-post-meta">
											<span class="post-author">
												<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fas fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
											</span>
											<span class="post-date">
												<a href="<?php the_permalink(); ?>"><i class="far fa-clock"></i><?php echo esc_html( get_the_date() ); ?></a>
											</span>
										</div>
									</div>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
						<?php
					endif;
					?>
				</div>
				<!-- End Main Banner Slider Area -->
				<!-- Trending Area Section -->
				<div class="trending-part">
					<?php if ( ! empty( $trending_title ) ) : ?>
						<div class="section-header">
							<h3 class="section-title"><?php echo esc_html( $trending_title ); ?></h3>
						</div>
						<?php
					endif;
					$trending_query = new WP_Query( $trending_args );
					if ( $trending_query->have_posts() ) :
						?>
						<div class="trending-wrapper banner-trending-carousel">
							<?php
							$i = 1;
							while ( $trending_query->have_posts() ) :
								$trending_query->the_post();
								?>
								<div class="mag-post-single banner-gird-single has-image tile-design">
									<div class="mag-post-img">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'post-thumbnail' ); ?>
										</a>
										<span class="trending-no"><?php echo absint( $i ); ?></span>
									</div>
									<div class="mag-post-detail">
										<div class="mag-post-category with-background">
											<?php news_port_categories_list( true ); ?>
										</div>
										<h3 class="mag-post-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<div class="mag-post-meta">
											<span class="post-author">
												<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="fas fa-user"></i><?php echo esc_html( get_the_author() ); ?></a>
											</span>
											<span class="post-date">
												<a href="<?php the_permalink(); ?>"><i class="far fa-clock"></i><?php echo esc_html( get_the_date() ); ?></a>
											</span>
										</div>
									</div>
								</div>
								<?php
								$i++;
							endwhile;
							wp_reset_postdata();
							?>
						</div>
						<?php
					endif;
					?>
				</div>
				<!-- End Trending Area Section -->
			</div>
		</div>
	</section>

	<?php

}

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package coop
 */

get_header(); ?>

	<div id="primary" class="content-area zen-container">
		<main id="main" class="site-main" role="main">

			<?php	get_sidebar( '7' );	?>

			<div class="articles">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				the_post_navigation( array(
						'prev_text' => sprintf( '<span class="prev-text">%s</span><span class="screen-reader-text">:</span><span class="prev-title" title="%s">%s</span>', esc_html__( 'Previous', 'coop' ), esc_attr__( '%title', 'coop' ),  esc_html__( '%title', 'coop' ) ),
						'next_text' => sprintf( '<span class="next-text">%s</span><span class="screen-reader-text">:</span><span class="next-title" title="%s">%s</span>', esc_html__( 'Next', 'coop' ), esc_attr__( '%title', 'coop' ), esc_html__( '%title', 'coop' ) ),
				) );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div><!-- .articles -->

			<?php get_sidebar( '2' ); ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary.zen-container -->

<?php

get_footer();

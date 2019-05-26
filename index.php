<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coop
 */

get_header(); ?>

	<div id="primary" class="content-area zen-container">
		<main id="main" class="site-main" role="main">

			<?php	get_sidebar( '7' );	?>

			<div class="articles">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Newer Posts', 'coop' ),
					'next_text'          => esc_html__( 'Older Posts', 'coop' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'coop' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div><!-- .articles -->

			<?php get_sidebar( '2' ); ?>

		</main><!-- #main -->

		<?php	get_sidebar();	?>

	</div><!-- #primary.zen-container -->

<?php

get_footer();

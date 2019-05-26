<?php
/**
 * The template for displaying archive pages.
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
			if ( have_posts() ) :	?>

				<?php coop_breadcrumb(); ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</div><!-- .articles -->

			<?php get_sidebar( '2' ); ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary.zen-container -->

<?php

get_footer();

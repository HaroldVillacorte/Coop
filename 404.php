<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package coop
 */

get_header(); ?>

	<div id="primary" class="content-area zen-container">
		<main id="main" class="site-main" role="main">

			<?php	get_sidebar( '7' );	?>

			<div class="articles">

				<section class="error-404 not-found">

					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'coop' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">

						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'coop' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</div><!-- .articles -->

			<?php get_sidebar( '2' ); ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary.zen-container -->

<?php

get_footer();

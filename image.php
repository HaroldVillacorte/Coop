<?php
/**
 * The template for displaying all Image Attachment posts.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/attachment-template-files/
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

					get_template_part( 'template-parts/content', 'attachment-image' );

					the_post_navigation();

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

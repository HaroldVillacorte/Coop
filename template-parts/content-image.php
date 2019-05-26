<?php
/**
 * Template part for Format Image posts.
 *
 * @link https://codex.wordpress.org/Post_Formats
 *
 * @package coop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-text">

		<?php coop_breadcrumb(); ?>

		<header class="entry-header">
			<?php

			the_title( '<h1 class="entry-title">', '</h1>' );

			if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">
					<?php coop_posted_on( false ); ?>
				</div><!-- .entry-meta -->

			<?php	endif; ?>

		</header><!-- .entry-header -->

		<?php if ( is_single() && has_excerpt() ) : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'coop' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coop' ),
						'after'  => '</div>',
				) );
				?>
				<?php if ( is_single() ) { get_sidebar( '5' ); } ?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php coop_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>

		<?php
		if ( ! is_single() ) {
			coop_post_thumbnail_image();
			edit_post_link(
				sprintf(
					esc_html__( '&nbsp;Edit %s', 'coop' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link fa fa-gear">',
				'</span>'
			);
		}
		?>

</article><!-- #post-## -->

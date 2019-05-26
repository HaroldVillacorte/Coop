<?php
/**
 * Template part for displaying post format Aside.
 *
 * @link https://codex.wordpress.org/Post_Formats
 *
 * @package coop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-text">

		<?php coop_post_thumbnail( true ); ?>

		<?php coop_breadcrumb(); ?>

		<?php if ( is_single() ) : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php coop_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<?php endif; ?>

		<?php if ( is_single() && has_excerpt() ) : ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		<?php endif; ?>

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

	</div><!-- .entry-text -->

</article><!-- #post-## -->

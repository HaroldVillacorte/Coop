<?php
/**
 * Template part for displaying Image Attachment posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-text">

		<?php coop_breadcrumb(); ?>

		<div class="entry-attachment">
			<?php $image_size = apply_filters( 'wporg_attachment_size', 'large' );
			echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>

			<?php if ( has_excerpt() ) : ?>

				<div class="entry-caption">
					<?php the_excerpt(); ?>
				</div><!-- .entry-caption -->
			<?php endif; ?>
		</div><!-- .entry-attachment -->

		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php coop_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif; ?>

		</header><!-- .entry-header -->

		<?php coop_post_thumbnail(); ?>

		<?php if ( ! is_single() ) : ?>
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
			</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-footer">
			<?php coop_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-text -->

</article><!-- #post-## -->

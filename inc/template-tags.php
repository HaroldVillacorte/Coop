<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package coop
 */

if ( ! function_exists( 'coop_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 *
	 * @param bool $link_it Set to false to unlink the date.
	 */
	function coop_posted_on( $link_it = true ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on_before = '<span class="posted-on-before">' . esc_html__( 'Posted on ', 'coop' ) . '</span>';

		if ( ! $link_it || is_single() ) {
			$posted_on        = $time_string;
		} else {
			$posted_on        = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
		}

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'coop' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on_before . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

		if ( ! is_search() ) {

			// I Recommend This.
			if ( function_exists( 'dot_irecommendthis' ) ) {
				echo '&nbsp;';
				dot_irecommendthis();
			}

			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link"><i class="fa fa-comments">&nbsp;</i>';
				/* translators: %s: post title */
				comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'coop' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
				echo '</span>';
			}
		}

	}
endif;

if ( ! function_exists( 'coop_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function coop_entry_footer() {

		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			echo '<div class="taxonomy-links">';

			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'coop' ) );
			if ( $categories_list && coop_categorized_blog() ) {
				echo '<div><span>' . esc_html__( 'Categories: ', 'coop' ) . '</span>';
				printf( '<span class="cat-links">' . esc_html( '%1$s' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
			}
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'coop' ) );
			if ( $tags_list ) {
				echo '<div><span>' . esc_html__( 'Tags: ', 'coop' ) . '</span>';
				printf( '<span class="tags-links">' . esc_html( '%1$s' ) . '</span></div>', $tags_list ); // WPCS: XSS OK.
			}

			echo '</div>';

			if ( ! is_single() ) {
				echo '<div class="taxonomy-links-toggle" aria-hidden="true"></div>';
			}
		}

		/* Read More Link */
		if ( 'post' === get_post_type() && ! is_single() ) {
			echo '<a class="read-more" title="' . get_the_title() . '" href="';
			if ( has_post_format( 'gallery' ) ) {
				echo esc_attr( get_the_permalink() ) . '">' . esc_html__( 'View the Gallery', 'coop' );
			} elseif ( has_post_format( 'audio' ) ) {
				echo esc_attr( get_the_permalink() ) . '">' . esc_html__( 'View the Details', 'coop' );
			} else {
				echo esc_attr( get_the_permalink() ) . '">' . esc_html__( 'Read More', 'coop' );
			}
			echo '<span class="screen-reader-text">&nbsp;-&nbsp;' . get_the_title() . '</span></a>';
		}

		edit_post_link(
			sprintf(
				esc_html__( '&nbsp;Edit %s', 'coop' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link fa fa-gear">',
			'</span>'
		);

	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function coop_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'coop_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'coop_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so coop_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so coop_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in coop_categorized_blog.
 */
function coop_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'coop_categories' );
}

add_action( 'edit_category', 'coop_category_transient_flusher' );
add_action( 'save_post', 'coop_category_transient_flusher' );

/**
 * Displays an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 *
 * Create your own coop_post_thumbnail() function to override in a child theme.
 *
 * @param bool $remove_link True to echo non-linked thumbnail.
 *
 * @since coop 1.0.0
 */
function coop_post_thumbnail( $remove_link = false ) {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() || true === $remove_link ) : ?>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->

	<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php the_post_thumbnail( 'post-thumbnail' ); ?>
		</a>

	<?php endif; // End is_singular().
}

/**
 * Displays post thumbnail for galleries with no Featured Image.
 *
 * Wraps the post thumbnail in an anchor element on index views.
 *
 * Create your own coop_post_thumbnail_gallery() function to override in a child theme.
 *
 * @since coop 1.0.0
 */
function coop_post_thumbnail_gallery() {
	global $post;
	$the_permalink = get_the_permalink();
	if ( ! is_singular() ) : ?>

		<?php if ( has_post_thumbnail() ) : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php the_post_thumbnail( 'post-thumbnail' ); ?>
			</a>

		<?php else : ?>

			<?php
			$pattern = get_shortcode_regex();

			if ( preg_match_all( '/' . $pattern . '/s', $post->post_content, $matches )
				&& array_key_exists( 2, $matches )
				&& in_array( 'gallery', $matches[2], true ) ) :

				$keys = array_keys( $matches[2], 'gallery', true );

				foreach ( $keys as $key ) :
					$atts = shortcode_parse_atts( $matches[3][ $key ] );
					if ( array_key_exists( 'ids', $atts ) ) :

						$images = new WP_Query(
							array(
								'post_type' => 'attachment',
								'post_status' => 'inherit',
								'post__in' => explode( ',', $atts['ids'] ),
								'orderby' => 'post__in',
							)
						);

						if ( $images->have_posts() ) : $i = 0; ?>

							<!-- the loop -->
							<?php while ( $images->have_posts() && 0 === $i ) : $images->the_post(); ?>
								<a class="post-thumbnail" href="<?php echo esc_attr( $the_permalink ); ?>" aria-hidden="true">
									<?php echo wp_get_attachment_image( $post->ID, 'large' ); ?>
									<?php $i++; ?>
								</a>
							<?php endwhile; ?>
							<!-- end of the loop -->

						<?php endif;

						wp_reset_postdata();

					endif;
				endforeach;
			endif;
		endif;
	endif;
}

/**
 * Displays a post thumbnail for Post Format Image posts.
 *
 * Create your own coop_post_thumbnail_image() function to override in a child theme.
 *
 * @since coop 1.0.6
 */
function coop_post_thumbnail_image() {
	$content = do_shortcode( get_the_content() );
	$wp_captions_regex = '/<figure\s.*class=".*wp-caption.*".*>.*<\/figure>/';
	$linked_image_regex = '/<a\s.*href=".+".*>\s*<img\s.*src=".+".*\/?>.*<\/a>/';
	$non_linked_image_regex = '/<img\s.*src=".+".*\/?>/';
	preg_match( $wp_captions_regex, $content, $wp_captions );
	preg_match( $linked_image_regex, $content, $linked_images );
	preg_match( $non_linked_image_regex, $content, $non_linked_images );

	if ( count( $wp_captions ) > 0 ) :
		echo $wp_captions[0];

	elseif ( count( $linked_images ) > 0 ) :
		echo $linked_images[0];

	elseif ( count( $non_linked_images ) > 0 ) :
		echo $non_linked_images[0];

	elseif ( has_post_thumbnail() ) :
		the_post_thumbnail( 'post-thumbnail' );

	else :
		echo esc_html__( 'No Image Found', 'coop' );

	endif;
}

/**
 * Displays a post thumbnail for Post Format Audio posts.
 *
 * Create your own coop_post_thumbnail_audio() function to override in a child theme.
 *
 * @since coop 1.0.6
 */
function coop_post_thumbnail_audio() {
	$audio_attachments = get_attached_media( 'audio' );

	if ( count( $audio_attachments ) > 0 ) {
		$file = array_shift( $audio_attachments );
		echo wp_audio_shortcode( array(
			'src'      => $file->guid,
			'loop'     => '',
			'autoplay' => '',
			'preload'  => 'none',
		) );
	} elseif ( has_post_thumbnail() ) {
		the_post_thumbnail( 'post-thumbnail' );
	} else {
		echo esc_html__( 'No Audio Found', 'coop' );
	}
}

/**
 * Displays a post thumbnail for Post Format Video posts.
 *
 * Create your own coop_post_thumbnail_video() function to override in a child theme.
 *
 * @since coop 1.0.7
 */
function coop_post_thumbnail_video() {
	$content = do_shortcode( get_the_content() );
	$html = apply_filters( 'the_content', $content );
	$wp_videos_regex = '/<iframe\s.*>.*<\/iframe>/';
	preg_match( $wp_videos_regex, $html, $wp_videos );

	if ( count( $wp_videos ) > 0 ) : ?>

		<div class="post-thumbnail-video">
			<?php echo $wp_videos[0]; ?>
		</div>

	<?php elseif ( has_post_thumbnail() ) :
		the_post_thumbnail( 'post-thumbnail' );

	else :
		echo esc_html__( 'No Video Found', 'coop' );

	endif;
}

/**
 * Displays a post thumbnail for Post Format Link posts.
 *
 * Create your own coop_post_thumbnail_link() function to override in a child theme.
 *
 * @since coop 1.0.07
 */
function coop_post_thumbnail_link() {
	$content = do_shortcode( get_the_content() );
	$links_regex = '/<a\s.*href=".+".*>.*<\/a>/';
	preg_match( $links_regex, $content, $links );

	if ( count( $links ) > 0 ) :
		echo $links[0];

	else :
		echo esc_html__( 'No Link Found', 'coop' );

	endif;
}

/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since coop 1.0.0
 */
function coop_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

/**
 * Returns the header styles based on Customizer configurations.
 *
 * @return string The styles
 */
function coop_get_header_styles() {
	$styles = '';
	if ( has_header_image() ) {
		$styles .= 'style=background-image: url(' . get_header_image() . ')';
	}
	return $styles;
}

/**
 * Provides Breadcrumb support for YoastSEO and NavXT.
 *
 * Does nothing if the plugins are no activated.
 *
 * @since coop 1.0.0
 */
function coop_breadcrumb() {
	// Wrapper.
	if ( function_exists( 'bcn_display' ) || function_exists( 'yoast_breadcrumb' ) || function_exists( 'woocommerce_breadcrumb' ) ) {
		echo '<nav class="breadcrumb">';
		if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {
			woocommerce_breadcrumb( array(
				'delimiter' => '&nbsp;&raquo;&nbsp;',
			) );
		} else {
			// NavXT.
			if ( function_exists( 'bcn_display' ) ) {
				echo '<div class="breadcrumb-navxt" typeof="BreadcrumbList" vocab="http://schema.org/">';
				bcn_display();
				echo '</div>';
			}
			// Yoast SEO.
			if ( function_exists( 'yoast_breadcrumb' ) ) {
				yoast_breadcrumb( '<div class="breadcrumb-yoast">', '</div>' );
			}
		}
		echo '</nav>';
	}
}

/**
 * Outputs inline Javascript.
 *
 * @since coop 1.0.07
 */
function coop_inline_script_one() {
	?>

	<script>

		( function() {
			'use strict';

			// The Coop Javascript Module.
			window.coopModule = window.coopModule || ( function() {

				var module = {

					// Properties.
					galleryTextViewImage: '<?php echo esc_attr__( 'View the Image', 'coop' ); ?>'

				};

				return module;

			} )();
		} )();

	</script>

	<?php
}

/**
 * File coop.js.
 *
 * Theme enhancements for a better user experience.
 *
 * Contains enhancements for the coop theme.
 */

( function( $ ) {
	'use strict';

	var doc = document.documentElement,
		backToTop = document.querySelector( '.back-to-top' ),
		scrollTop = 0,
		scrollLeft = 0;

	// Get scrollTop and scrollLeft variables.
	function getScroll( callback ) {
		scrollLeft = ( window.pageXOffset || doc.scrollLeft ) - ( doc.clientLeft || 0 );
		scrollTop = ( window.pageYOffset || doc.scrollTop )  - ( doc.clientTop || 0 );
		callback( scrollTop, scrollLeft );
	}

	// Add Tooltip function.
	function addToolTip( elem, content, side, animation, minWidth ) {
		if ( ! elem.className.match( ' open' ) ) {
			elem.className += ' open ';
			if ( -1 === elem.className.indexOf( 'tooltipstered' ) ) {
				$( elem ).tooltipster( {
					theme: ['tooltipster-light', 'tooltipster-light-customized'],
					content: content,
					contentAsHTML: true,
					side: side,
					animation: animation,
					minWidth: minWidth,
					maxWidth: 800,
					interactive: true,
					functionAfter: function() {
						elem.className = elem.className.replace( ' open', '' );
					}
				} );
			}
			$( elem ).tooltipster( 'open' );
		}
	}

	// Taxonomy Links Toggle Button.
	( function() {

		// Vars.
		var links = document.querySelectorAll( '.taxonomy-links-toggle' ),
			taxonomies, i;

		// Loop through Toggle links.
		for ( i = 0; i < links.length; i++ ) {
			taxonomies = links[ i ].parentElement.querySelector( '.taxonomy-links' );
			links[ i ].addEventListener( 'click', addToggle( links[ i ], taxonomies ) );
		}

		// Add Toggle function.
		function addToggle( link, taxonomies ) {
			['mouseenter', 'click'].forEach( function( each ) {
				link.addEventListener( each, function( event ) {
					addToolTip( link, taxonomies.innerHTML, 'right', 'grow', 400 );
				} );
			} );
		}

	} )();

	// Smooth Scroll.
	$( '.back-to-top' ).smoothScroll();
	( function() {
		window.addEventListener( 'scroll', function() {
			getScroll( function( top, left ) {
				if ( top >= 10 ) {
					backToTop.style.opacity = 1;
				} else {
					backToTop.style.opacity = 0;
				}
			} );
		} );
	} )();

	// Galleries.
	( function() {

		// Vars.
		var galleries = document.querySelectorAll( '.gallery' ),
			columnsClassArray;

		// Abort if no galleries.
		if ( 0 === galleries.length ) return;

		// Calculate number of slides to show function.
		function calculateSlidesToShow( slider, callback ) {
			[].forEach.call( slider.classList, function( each ) {
				if ( -1 !== each.indexOf( 'gallery-columns-' ) ) {
					columnsClassArray = each.split( '-' );
					callback( parseInt( columnsClassArray[ columnsClassArray.length - 1 ] ) );
				}
			} );
		}

		// Slide Tooltip function.
		function addEvents( slide ) {
			slide.onmouseenter = toggle;
			function toggle( e ) {
				var caption = slide.querySelector( 'figcaption' ),
					content = document.createElement( 'figure' ),
					image = slide.querySelector( 'img' ),
					newImage = document.createElement( 'img' ),
					newCaption = document.createElement( 'figcaption' ),
					link = document.createElement( 'a' ),
					href = slide.querySelector( 'a' ).href;
				content.className = 'gallery-tooltip';
				link.href = href;
				link.textContent = coopModule.galleryTextViewImage;
				if ( image ) {
					newImage.src = image.src;
					content.appendChild( newImage );
				}
				if ( caption ) {
					newCaption.textContent = caption.textContent;
					content.appendChild( newCaption );
				}
				if ( image || caption ) {
					content.appendChild( link );
					if ( slide.className.match( 'slick-active' ) ) {
						addToolTip( slide, content, 'top', 'grow', 150 );
					}
				}
			}
		}

		// Process slides function.
		function processSlides( gallery ) {
			var slides = gallery.querySelectorAll( '.gallery-item' ), i;
			for ( i = 0; i < slides.length; i++ ) {
				addEvents( slides[ i ] );
			}
			gallery.style.display = 'block';
		}

		// Init Slick.
		[].forEach.call( galleries, function( gallery ) {

			// Abort for Jetpack galleries.
			if ( gallery.className.match( 'jetpack' ) ) return;

			calculateSlidesToShow( gallery, function( slidesToShow ) {
				slickIt( gallery, slidesToShow );
			} );

			// Coop SlickIt function.
			function slickIt( gallery, slidesToShow ) {
				$( gallery )

					// Init event.
					.on( 'init', function( event, slick ) {
						processSlides( gallery );
					} )

					// Initiate slider.
					.slick( {
						slidesToShow: slidesToShow,
						centerMode: true,
						dots: true,
						infinite: true,
						mobileFirst: true,
						responsive: [ {
							breakpoint: 1024,
							settings: {
								slidesToShow: slidesToShow,
								infinite: true
							}
						}, {
							breakpoint: 600,
							settings: {
								slidesToShow: 3,
								dots: true
							}
						}, {
							breakpoint: 300,
							settings: {
								slidesToShow: 1,
								dots: true
							}
						} ]
					} );
			}

		} );

	} )();

	// Taxonomy Links accessibility.
	( function() {

		var taxonomyLinks = document.querySelectorAll( '.hfeed .taxonomy-links a' ),
			parentContainer;

		[].forEach.call( taxonomyLinks, function( link ) {
			link.addEventListener( 'focus', function ( e ) {
				parentContainer = link.parentNode.parentNode.parentNode;
				if ( ! parentContainer.className.match( ' focus' ) ) {
					parentContainer.className += ' focus';
				}
			} );
		} );
		
	} )();

	// Post Format Chat.
	( function() {

		var chatPosts = document.querySelectorAll( '.hfeed .format-chat .entry-content' ),
			paragraphs, container, timeout = 3000, newParagraph, newParagraphs, x;

		[].forEach.call( chatPosts, function( chat ) {
			container = document.createElement( 'div' );
			paragraphs = chat.children;
			container.className = 'chat-container';
			container.setAttribute( 'aria-hidden', 'true' );
			chat.parentNode.insertBefore( container, chat.parentNode.querySelector( '.entry-footer' ) );

			( function chatLoop() {
				[].forEach.call( paragraphs, function ( paragraph, i ) {
					setTimeout( function() {
						newParagraphs = container.children;
						for ( x = 0; x < newParagraphs.length; x++ ) {
							if ( x > 1 ) {
								container.removeChild( newParagraphs[0] );
							} else {
								newParagraphs[ x ].className = '';
							}
						}
						newParagraph = document.createElement( 'p' );
						newParagraph.className = 'animated fadeIn';
						newParagraph.textContent = paragraph.textContent;
						container.appendChild( newParagraph );
						if ( paragraphs.length - 1 === i ) {
							setTimeout( function () {
								chatLoop();
							} , timeout );
						}
					}, i * timeout );
				} );
			} )();

		} );

	} )();

	// Post Format Video.
	( function() {

		var hfeedVideoIframes = document.querySelectorAll( '.hfeed .format-video iframe' );

		[].forEach.call( hfeedVideoIframes, function( videoIframe ) {
			videoIframe.style.display = 'block';
			videoIframe.parentNode.style.display = 'block';
		} );

	} )();

} )( jQuery );

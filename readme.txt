=== coop ===

Contributors: Harold Villacorte
Tags: Tags: three-columns, left-sidebar, right-sidebar, accessibility-ready, custom-menu, custom-logo, featured-images, footer-widgets, full-width-template, post-formats, threaded-comments, translation-ready, blog, news

Requires at least: 4.0
Tested up to: 5.2.1
Stable tag: 1.0.16
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme called Coop based on underscores.

== Description ==

Coop is optimized for blogs and web pages. The layout options and overall look and feel of the theme are ideal for news, magazine, and other content publishing sites. It's clean design and strong support for Page Builder layouts also makes it a great choice for building landing pages. If you are an agency, this theme is for you.  Coop layouts and designs are optimized to work with any screen size making your content look good and be accessible on everything from smart phones to tablets and desktops to flat screen televisions and retina devices.  There are plenty of options for placing widgets and Coop automatically calculates the layout giving you virtually unlimited layout options without writing any code.  Also, Coop templates are optimized for maximum search engine and screen reader device accessibility and provides full support for YoastSEO and NavXT breadcrumbs.  The theme supports non-standard post formats, is translation ready, and provides support for high resolution post thumbnails, HD multimedia, site branding, and much much more.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

~~Coop includes support for Infinite Scroll in JetPack.~~
Coop includes support for Related Content in JetPack.
Coop includes support for Like buttons in JetPack.
Coop includes support for Sharing buttons in JetPack.
Coop includes support for NavXT Breadcrumb.
Coop includes support for Google Language Translator.
Coop includes support for Google Tag Manager for WordPress.
Coop includes support for I Recommend This.
Coop includes support for Max Mega Menu.
Coop includes support for Max Mega Menu - Pro AddOn.
Coop includes support for Page Builder by SiteOrigin.
Coop includes support for Yoast SEO breadcrumbs.

== Changelog ==

= 1.0.16 May 26, 2019 =
== Required changes ==
* Updates support version to WordPress 5.2.1
* Adds conditions to for taxonomy toggle
* Removed Bower packages.

= 1.0.15 May 17, 2017 =
== Required changes ==
* Added copyright notice to style.scss/style.css
* Removed coop_hd image size
* Removed alt option from all occurrences of the_post_thumbnail()
* Resolved: ERROR Missing singular placeholder, needed for some languages.  Replaced  esc_html with wp_kses and placed the number 1 inside span with class of display-none on line 31 of comments.php.  Added .display-none css rule to /sass/modules/helpers.scss
* Resolved: ERROR Silencing errors is forbidden. Removed error suppression operator from str_replace() call on line 1094 of inc\coop-mobile-detect.php
* Resolved: ERROR Found usage of constant "HEADER_TEXTCOLOR".  Removed the HEADER_TEXTCOLOR === $header_text_color equality check since there is a default

== Additional changes ==
* Added style.css.map source map
* Added theme support for Related Content in JetPack
* Added post thumbnail back to Format Audio
* Added post thumbnail to Format Chat single posts
* Added thumbnail back to Aside Format
* Added post thumbnail to Format Status single posts
* Added post thumbnail to Format Link single posts
* Added post thumbnail to Format Video single posts
* Added post thumbnail to Format Gallery single posts
* Added .entry-footer and .entry-content back to Format Image single posts
* Added breadcrumb to all post formats single posts
* Max-height change to Format Video
* Normalized Format Link and Status single posts
* Made some typography improvements
* Added support for Like/Sharing buttons in JetPack
* Improved Format Aside
* Reduced post width for no-sidebar posts
* Made some layout adjustments
* Restyled taxonomy links
* Improved responsiveness of post navigation
* Made entry-content widget titles black with new Customizer option
* Made Max Mega Menu link text white in included theme
* Cleaned up styling on search results
* Fixed widget layout problem on non-sidebar widget areas
* Removed black color from strong and cite styles
* Added shadow style to entry-content and entry-summary links
* Improved widget styling
* Removed all defaults from the customizer with the exception of typography
* Fixed layout issues on Full Width page template
* Changed full width page template entry-header visibility to display none
* Added excerpt to single posts for Format Standard
* Added excerpt to single posts for Format Aside
* Added excerpt to single posts for Format Chat
* Added excerpt to single posts for Format Gallery
* Added excerpt to single posts for Format Image
* Added excerpt to single posts for Format Link
* Added excerpt to single posts for Format Status
* Improved responsive padding to Format Chat posts in hfeeds
* Changed default Menu font to Prata and added some styling changes
* Added Content Bottom widget area
* Added Landing Page only footer widgets areas
* Added landing page back-to-top customizer option
* Made text larger for entry-content and entry-summary
* Added title attribute to Read More link and tooltipster it
* Switched sidebar names between left and right
* Redid .pot file
* Redid screenshot.png

= 1.0.14 April 23, 2017 =
* Added non-minified versions of /lib/tooltipster.bundle.css and /lib/tooltipster.bundle.js
* Replaced all occurrences of `__\((.*)\)` with  `esc_html__\($1)\)` with the exception of _s tags
* Redid .pot file
* Changed WordPress compatibility to 4.7.4

= 1.0.13 April 19, 2017 =
* Added TGM Plugin Activation Library license to readme.txt

= 1.0.12 April 19, 2017 =
* Added semicolon to &nbsp; in coop_posted_on template tag in
* Replaced .menu with #primary-menu.menu in /sass/navigation/_menus.scss to prevent conflicts with Max Mega Menu
* Updated included Max Mega Menu theme
* Added override to default Max Mega Menu theme
* Added file /inc/class-tgm-plugin-activation.php ( TGM Activation class )
* Added coop_register_required_plugins action hook to /inc/extras.php ( TGM activation for Kirki )
* Added file /inc/kirki.php ( Kirki customizer config )
* Added inline style action hook "coop_kirki_style" to /inc/kirki.php at the end of the file
* Added require statements for new php files in functions.php
* Changed .site-header background-color to #f7f7f7 achieving 19.6:1 contrast ratio with Site Title ( #000 ) and 5.2:1 with Site Description ( #686868 )
* Changed #footer-top text color to #222 achieving contrast ratio of 14.9:1 with background ( #f7f7f7 )
* Changed #footer-bottom Widget Title color to #f7f7f7 achieving contrast ratio of 19.6:1 with background ( #000 )
* Redid .pot file

= 1.0.11 April 04, 2017 =
* Updated readme.txt to reflect license change with new image used in screenshot.png

= 1.0.10 April 04, 2017 =
* Changed accent color to #980000 achieving contrast ratio of 9:1 with white, 8.4:1 with #f7f7f7
* Changed tooltipster background color back to #f7f7f7 achieving contrast ratio of 8.4:1 with #f7f7f7
* Changed Main Menu background color back to #980000 achieving contrast ratio of 9:1 with white
* Changed Main Menu sub-menu background color back to rgba(0, 0, 0, 0.9) achieving contrast ratio of 19.3:1 with white
* Changed Main Menu sub-menu font-family to OpenSans
* Removed left padding from Main Menu sub-menu and added it to the li
* Centered the Main Menu
* Changed #footer-top background-color to #f7f7f7f achieving contrast ratio of 5.8:1 with #616161 (inherited text color)
* Changed #footer-top Widget Title color to black
* Removed #footer-top specific typography styles
* Changed #footer-bottom background-color to black
* Changed #footer-bottom color to white for text, links, and hover/focus links
* Redid screenshot.png
* Changed WordPress version compatibility to 4.7.3

= 1.0.09 March 30, 2017 =
* Updated screen-reader-text mixin with { word-wrap: normal !important };
* Changed brown/orange accent color to #9A6E1B to achieve 4.5:1 contrast ratio with white background
* Changed taxonomy tooltip background color to white to achieve 4.5:1 contrast ratio with #9A6E1B text
* Added Post Title to Read More links wrapped in a span with screen-reader-class
* Updated skip-link-focus-fix.js from latest _s master
* Replaced screen-reader-text style for Mobile Menu Toggle to { display:none } for large screens
* Removed aria-hidden property from back-to-top link
* Changed Mobile Menu show/hide logic from absolute positioning to { display: none/block } to prevent undesired keyboard navigation
* Change #EEE to #eee in _colors.scss
* Widened site-title and site-description areas to 700px
* Added bottom padding to mobile menu

= 1.0.08 March 15, 2017 =
* Restyled main menu.
* Redid Coop Max Mega Menu theme
* Redid screenshot
* Expanded description in readme.txt

= 1.0.07 March 14, 2017 =
* Added icon to Post Format Audio
* Added Javascript to enhance accessibility for taxonomy links in feeds
* Added caption to post format Image
* Edited format image thumbnail regex to capture captions and non-linked images
* Added edit links to non-standard post formats
* Added focus underline styling to ALL links
* Added Read More back to Post Format Audio
* Restyled Gallery arrows
* Made hover view image link translatable for Post Format Gallery
* Changed Post Format Audio Read More text
* Added Post Format Status support
* Added Post Format Link support
* Added Post Format Chat support
* Added Post Format Video support
* Improved Post Formats responsive styles
* Added icons to all post formats
* Redid .pot file

= 1.0.06 Feb 14, 2017 =
* Styling change to post navigation
* Added Post Format Image support
* Added Post Format Audio support
* Removed action hook coop_register_required_plugins
* Added links to images used in screenshot.png

= 1.0.05 - Feb 13, 2017 =
* Added show/hide functionality for Galleries while loading/processing

= 1.0.04 - Feb 13, 2017 =
* Replaced forEach with [].foreach.call in NodeList loops

= 1.0.03 - Feb 13, 2017 =
* Edited readme.txt

= 1.0.02 - Feb 13, 2017 =
* Added Mobile Detect license
* Prefixed HD image size with "coop" (again)
* Removed TGMPA action class
* Added license for images used in screenshot.png

= 1.0.01 - Feb 13, 2017 =
* Wrote new Main Navigation
* Removed rtl.css
* Added licenses to readme.txt
* Added Colors and Header Image back to the Customizer
* Prefixed image size HD with coop.
* Changed release version to 1.0.0
* Upgraded jQuery Smooth Scroll to v2.12
* Upgraded Tooltipster to v4.1.7
* Fixed styling issues on search results page
* Removed jsSocials library
* Made improvements to hfeed styles
* Removed Max Mega Menu requirement
* Improved lists styling
* Improved blockquote, q, and cite styling
* Deleted post format Quote template
* Improved Quote format
* Improved Gallery format
* Improved Aside format
* Added Sticky style
* Improved page edit link
* Improved post navigation
* Removed header widget areas
* Redid .pot file
* Redid screenshot
* Upgraded FontAwesome to 4.7.0
* Added FontAwesome license to readme.txt
* Added custom templates for Image Attachments
* Added styling for Image Attachments with breadcrumb
* Reorganized Sass files and menu
* Restyled Back to Top button
* Added versioning system for scripts and stylesheets
* Added Mobile Detect library
* Added mobile and tablet body classes
* Enhanced mobile(tablet/phone) navigation

= 1.0 - Oct 05, 2016 =
* Initial release

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* animate.css http://daneden.me/animate, Copyright (c) 2016 Daniel Eden, [MIT](http://opensource.org/licenses/MIT)
* jQuery Smooth Scroll https://github.com/kswedberg/jquery-smooth-scroll, Copyright (c) 2017 Karl Swedberg, [MIT](http://opensource.org/licenses/MIT)
* Tooltipster http://iamceege.github.io/tooltipster/, Developed by Caleb Jacob and Louis Ameline, [MIT](http://opensource.org/licenses/MIT)
* TGM-Plugin-Activation http://tgmpluginactivation.com/, Copyright (c) 2011, Thomas Griffin, [GPL-2.0+](https://www.gnu.org/licenses/gpl-2.0.html)
* Slick https://github.com/kenwheeler/slick/, Copyright (c) 2014 Ken Wheeler, [MIT](http://opensource.org/licenses/MIT)
* Font Awesome 4.7.0 http://fontawesome.io, by @davegandy, [MIT](http://fontawesome.io/license)
* Mobile Detect Library http://mobiledetect.net, by Serban Ghita, Nick Ilyin, Victor Stanciu, [MIT](https://github.com/serbanghita/Mobile-Detect/blob/master/LICENSE.txt)
* Images used in screenshot.png https://www.pexels.com, Pexels, [CC0](https://creativecommons.org/publicdomain/zero/1.0/)
    1. Image 1 - https://www.pexels.com/photo/red-fruit-handing-on-tree-branch-selective-color-photography-64705/
    2. Image 2 - https://www.pexels.com/photo/beer-bottle-105017/
* TGM Plugin Activation http://tgmpluginactivation.com/, Copyright (c) 2011, Thomas Griffin, [GPLv2 or later](https://opensource.org/licenses/GPL-2.0)

== Notes ==
=== Todos ===
@todo Add title attribute to mobile "next" and "prev" links in posts nav
@todo Add Styling back to format status/link single posts
@todo Add title property to back-to-top
@todo Make standard blockquotes responsive
@todo Remove red border from Format Gallery button-light
@todo Style Format Status on single posts and add gravatar to both
@todo Remove padding-top from Format Status on feed
@todo Add vertical spacing between sidebar left for mobile and check sidebar right
@todo Make improvements on Category and Tag descriptions styling
@todo Add code style
@todo change gallery tooltips to caption only - no image
@todo Change the name to Coop
@todo Make default Site Description text larger with full typography customizer option
@todo Add author profile section with options
@todo Add post format gallery options with Masonry
@todo Add hide title option for pages
@todo Add hide taxonomy toggle/ show big taxonomies
@todo Add hide taxonomy links
@todo Add logo sizing option
@todo Add "Nav Only" and "Nav Top" layout options
@todo Add cool header hamburger sidebar
@todo Add blockquote style options
@todo Add social links solutions/options
@todo Add header search solutions/options

=== Todos: Ongoing ===
@todo Redo screenshot.png and image licensing
@todo Redo .pot file

=== WP Print Friendly ===
Contributors: ethitter, thinkoomph
Donate link: http://www.thinkoomph.com/plugins-modules/wp-print-friendly/
Tags: print, template, printer, printable
Requires at least: 3.1
Tested up to: 3.1.2
Stable tag: 0.3

Extends WordPress' template system to support printer-friendly templates. Works with permalink structures to support nice URLs.

== Description ==

Extends WordPress' template system to support printer-friendly templates for posts, pages, and custom post types. Uses WP standard template naming to support templates on a post-type basis. Supports printing paged posts on single page. Adds nice URLs for printer-friendly pages.

== Installation ==

1. Upload wp-print-friendly.php to /wp-content/plugins/.
2. Activate plugin through the WordPress Plugins menu.
3. Navigate to Options > Permalinks and click 'Save Changes' to update navigation.

== Frequently Asked Questions ==

= Print links don't work =
First, navigate to Options > Permalinks in WP Admin and click 'Save Changes.' If links still don't appear, visit http://www.thinkoomph.com/plugins-modules/wp-print-friendly/ and leave a comment detailing the problem.

= How should I name print templates? =
Print templates should be prefixed with 'wpf' and follow WordPress template conventions from there. To use one template for all contexts unless otherwise specified, name your template 'wpf.php.' For custom post types, 'wpf-[post type name].php' will be used for that post type. Similarly, 'wpf-home.php' will load that template for the front page of your site. The plugin includes a default template that may suit many needs.

= How do I add a print link to my templates? =
The function `wpf_the_print_link` will add a link to the print-friendly version of whatever page it appears on. This function accepts the following arguments:
* $page_link: Set to true to add a link to the current page in a paged post in addition a to a link for the entire post.
* $link_text: Set to text that should appear for the print link. Defaults to "Print this post"
* $class: Specifies the CSS class for the print link. Defaults to "print_link"
* $page_link_separator: If $page_link is true, specifies what separator will appear between the print link for the entire post and the print link for the current page of the post.
* $page_link_text: If $page_link is true, specifies what text will appear for the print link for the current page. Defaults to "Print this page"

== Changelog ==

= 0.3 =
*Initial version
=== WP Print Friendly ===
Contributors: ethitter, thinkoomph
Donate link: http://www.thinkoomph.com/plugins-modules/wp-print-friendly/
Tags: print, template, printer, printable
Requires at least: 3.1
Tested up to: 3.2.1
Stable tag: 0.4.2.1

Extends WordPress' template system to support printer-friendly templates. Works with permalink structures to support nice URLs.

== Description ==

Extends WordPress' template system to support printer-friendly templates for posts, pages, and custom post types. Uses WP standard template naming to support templates on a post-type basis. Supports printing paged posts on single page. Adds nice URLs for printer-friendly pages.

**IMPORTANT**: There are certain plugins that may interfere with this plugin's functionality. See the **FAQ** for more information.

== Installation ==

1. Upload wp-print-friendly.php to /wp-content/plugins/.
2. Activate plugin through the WordPress Plugins menu.
3. Navigate to Options > Permalinks and click *Save Changes* to update navigation.

== Frequently Asked Questions ==

= Print links don't work =
First, navigate to Options > Permalinks in WP Admin, click *Save Changes*, and try again.

If clicking on a print link takes you back to the post or page where the link appeared, see the **Known Plugin Conflicts** item below.

If, after reviewing the remaining FAQ, you are still experiencing problems, visit [http://www.thinkoomph.com/plugins-modules/wp-print-friendly/](http://www.thinkoomph.com/plugins-modules/wp-print-friendly/) and leave a comment detailing the problem.

= How should I name print templates? =
Print templates should be prefixed with *wpf* and follow WordPress template conventions from there. To use one template for all contexts unless otherwise specified, name your template *wpf.php.* For custom post types, *wpf-[post type name].php* will be used for that post type. Similarly, *wpf-home.php* will load that template for the front page of your site. The plugin includes a default template that may suit many needs.

= How do I add a print link to my templates? =
The function `wpf_the_print_link` will add a link to the print-friendly version of whatever page it appears on. This function accepts the following arguments:

* **$page_link**: Set to true to add a link to the current page in a paged post in addition a to a link for the entire post.
* **$link_text**: Set to text that should appear for the print link. Defaults to *Print this post*.
* **$class**: Specifies the CSS class for the print link. Defaults to *print_link*.
* **$page_link_separator**: If $page_link is true, specifies what separator will appear between the print link for the entire post and the print link for the current page of the post.
* **$page_link_text**: If $page_link is true, specifies what text will appear for the print link for the current page. Defaults to *Print this page*.
* **$link_target**: If set to "new", print links will open in a new window.

= Known Plugin Conflicts =
This plugin is known to conflict with certain plugins, many pertaining to SEO and permalinks. Conflicting plugins include, but are not limited to, the following:

* **WordPress SEO by Yoast:** This plugin's `Permalink` options, particularly *Redirect attachment URL's to parent post URL* and *Redirect ugly URL's to clean permalinks. (Not recommended in many cases!)*, interfere with WP Print Friendly's ability to display print templates. Both must be disabled, and the site's rewrite rules regenerated (by visiting Options > Permalinks and clicking *Save Changes*), for WP Print Friendly to function.

== Changelog ==

= 0.4.2.1 =
* Version 0.4.2 omitted the default template.

= 0.4.2 =
* Correct page rewrite rules to accomodate situations necessitating verbose rules, such as when the permalink structure starts with `%postname%`. Thanks to Wes Herzik at ikonic for discovering and reporting this issue.

= 0.4.1 =
* Fix bug that displayed post links automatically on the wrong post types.

= 0.4 =
* Child pages now fully supported.
* Generates and registers rewrite rules more efficiently.
* Rewrite setting for all post types and taxonomies are now considered when adding print support.
* Add option to disable endnotes representing links found in content.
* Move copyright and other static elements from content filters to default template.
* Add function to display page numbers when printing single page of post.
* Options page is now fully translation-ready.
* Notices are translation-ready.
* Correct various other bugs, including many related to non-standard permalink structures, custom post types, and custom taxonomies.

= 0.3.2 =
* Add option to open print-friendly views in a new window.

= 0.3.1 =
* Correct PHP error in `is_print()`.

= 0.3 =
* Initial version.

== Upgrade Notice ==

= 0.4.2.1 =
Version 0.4.2 omitted the default template.

= 0.4.2 =
This release expands the plugin's page rewrite rules to accomodate permalink structures that necessitate verbose rules, such as when the structure begins with `%postname%`.

= 0.4.1 =
This release fixes bug that displayed post links automatically on the wrong post types.

= 0.4 =
This release addresses numerous bugs reported by the community, including print templates for child pages. All admin text, save the plugin's name, are now ready for translation. Templates are now completely customizable, and new template functions are included.
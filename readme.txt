=== Minify HTML ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: minify, html, css, js, code
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: MNFHTM

Tactfully minifies HTML output and markup to remove line breaks, whitespace, comments, and other code bloat to cleanup source code and improve speed.

== Description ==

Tactfully minifies HTML output and markup to remove line breaks, whitespace, comments, and other code bloat to cleanup source code and improve speed.

* [**Join our FREE Facebook group for support!**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/minify-html-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/minify-html)
* [Plugin GitHub](https://github.com/littlebizzy/minify-html)
* [SlickStack (LEMP stack automation)](https://slickstack.io)

#### The Long Version ####

The point of this plugin is to wisely minify HTML without doing "stupid" (unstable) minify methods like bundling external resources and forcing them to load in some messy new file name which is pointless after HTTP/2 anyways.

The minification only happens in the front side, avoiding these contexts:

- Admin area
- During WP installing process
- WP CRON requests
- XMLRPC requests
- WP CLI commands
- Login / register / forgot password pages

I have added some constants, and all constants have boolean true|false data types, e.g:
define('MINIFY_HTML_REMOVE_EXTRA_SPACING', false);

This is the complete list of constants the plugin manages:

MINIFY_HTML
Enables the plugin functionality
Enabled by default

MINIFY_HTML_UTF8_SUPPORT
UTF8 support for regular expression operations
Enabled by default

MINIFY_HTML_REMOVE_EXTRA_SPACING
Replace extra spaces in HTML and espaces between tags (except in styles, javascript code, and the content of textarea and pre tags)
Enabled by default

MINIFY_HTML_REMOVE_LINE_BREAKS
Removes line breaks in HTML (except in styles, javascript code, and the content of textarea and pre tags)
Enabled by default

MINIFY_HTML_REMOVE_COMMENTS
Removes HTML comments (including HTML comments inside the pre tag but leaving the textarea comments)
It does not remove conditionals comments like <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
Enabled by default

MINIFY_HTML_INLINE_STYLES
Minify inline styles between <style></style> tags removing extra espaces and line breaks
Enabled by default

MINIFY_HTML_INLINE_STYLES_COMMENTS
Removes inline styles comments /* .. */
Only works if MINIFY_HTML_INLINE_STYLES is enabled
Enabled by default

MINIFY_HTML_INLINE_SCRIPTS
Minify inline scripts code between <script></script> tags, removing extra espaces and line breaks
Disabled by default

MINIFY_HTML_INLINE_SCRIPTS_COMMENTS
Remove inline scripts comments /* .. */ and //
Only works if MINIFY_HTML_INLINE_SCRIPTS is enabled
Disabled by default

MINIFY_HTML_REMOVE_CONDITIONALS
Remove conditional tags like <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
Enabled by default

MINIFY_HTML_REMOVE_HTML5_SELF_CLOSING
Removes self-closing markup only for HTML5 documents, e.g. <meta charset="UTF-8" /> => <meta charset="UTF-8">
Determines if it is an HTML5 document when it starts with "<!doctype html>"
Disabled by default

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

Note: Any WordPress plugin may also be loaded as "Must-Use" by using the [Autoloader](https://github.com/littlebizzy/autoloader) script within the `mu-plugins` directory.

#### Defined Constants ####

* `define('DISABLE_NAG_NOTICES', true);`

#### Plugin Features ####

* Premium Version: [**SEO Genius**](https://www.littlebizzy.com/plugins/seo-genius)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Table Data: Yes
  * Creates New Tables: No
* Database Queries: Backend Only 
  * Query Types: Options API
* Multisite Support: No
* Uninstalls Data: Yes

#### Nag Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 6 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 9 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may annoy or confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community while providing valuable (free) recommendations for optimizing their website.

If you feel that these notices are too annoying, than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel, or even consider developing your own plugins for WordPress, if supporting free plugin authors is too frustrating for you. A final alternative would be to place the defined constant mentioned below inside of your `wp-config.php` file to manually hide this plugin's nag notices:

    define('DISABLE_NAG_NOTICES', true);

Note: This defined constant will only affect the notices mentioned above, and will not affect any other notices generated by this plugin or other plugins, such as one-time notices that communicate with admin-level users.

#### Inspiration ####

* n/a

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above-mentioned goals in mind... thanks!

== Installation ==

1. Upload to `/wp-content/plugins/minify-html-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

None use the defined constants.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post or join our Facebook group.

== Changelog ==

= 1.0.0 =
* initial release

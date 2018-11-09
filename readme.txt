=== Minify HTML ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: minify, html, css, js, code
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.0.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: MNFHTM

Tactfully minifies HTML output and markup to remove line breaks, whitespace, comments, and other code bloat to cleanup source code and improve speed.

== Description ==

Tactfully minifies HTML output and markup to remove line breaks, whitespace, comments, and other code bloat to cleanup source code and improve speed.

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/minify-html-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/minify-html)
* [Plugin GitHub](https://github.com/littlebizzy/minify-html)

#### Current Features ####

The point of this plugin is to wisely minify HTML without doing "stupid" (unstable) minify methods like bundling external resources and forcing them to load in some messy new file name which is pointless after HTTP/2 anyways.

The minification only happens in the front side, avoiding these contexts:

- Admin area
- During WP installing process
- WP CRON requests
- XMLRPC requests
- WP CLI commands
- Login / register / forgot password pages

In version 1.1.0 we will skip the robots.txt, sitemap, more MIME types, and improve our docs re: HTML tags/functionality. But for now the plugin is working fine and does not cause any errors that we know of.

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);
    
    /* Minify HTML Functions */
    define('MINIFY_HTML', true);
    define('MINIFY_HTML_INLINE_STYLES', true);
    define('MINIFY_HTML_INLINE_STYLES_COMMENTS', true);
    define('MINIFY_HTML_REMOVE_COMMENTS', true);
    define('MINIFY_HTML_REMOVE_CONDITIONALS', true);
    define('MINIFY_HTML_REMOVE_EXTRA_SPACING', true);
    define('MINIFY_HTML_REMOVE_HTML5_SELF_CLOSING', false);
    define('MINIFY_HTML_REMOVE_LINE_BREAKS', true);
    define('MINIFY_HTML_INLINE_SCRIPTS', false);
    define('MINIFY_HTML_INLINE_SCRIPTS_COMMENTS', false);
    define('MINIFY_HTML_UTF8_SUPPORT', true);

#### Plugin Features ####

* Parent Plugin: [**Speed Demon**](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

#### Our Philosophy ####

> "Decisions, not options." -- WordPress.org

> "Everything should be made as simple as possible, but no simpler." -- Albert Einstein

> "Write programs that do one thing and do it well... write programs to work together." -- Doug McIlroy

> "The innovation that this industry talks about so much is bullshit. Anybody can innovate... 99% of it is 'Get the work done.' The real work is in the details." -- Linus Torvalds

#### Search Keywords ####

n/a

== Installation ==

1. Upload to `/wp-content/plugins/minify-html-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working:

After plugin is activated, purge all caches and check website source code to verify the HTML output has been minified.

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

None use the defined constants.

= Can you explain about the defined constants? =

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

= How does the remove extra spaces function work? =

- Replaces horizontal tab (ascii char number 9) by an single space
- Replaces chunks of two or more spaces in a row by a single space

This spacing feature is applied if enabled to:

- Inline javascript code inside <script [...]> and </script>
- Inline css styles inside <style [...]> and </style>
- All the HTML including opening and closing tags (the removed behaviour of spaces before and after tags only applied here)
- The excluded tags are only pre and textarea

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post or join our Facebook group.

== Changelog ==

= 1.0.1 =
* fixed bug in `REMOVE_EXTRA_SPACING` that was removing spaces before/after inline HTML tags

= 1.0.0 =
* initial release
* tested with PHP 7.0
* tested with PHP 7.1
* tested with PHP 7.2

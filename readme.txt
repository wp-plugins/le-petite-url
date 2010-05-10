=== Plugin Name ===
Contributors: philnelson
Version: 2.0
Plugin URI: http://extrafuture.com/projects/la-petite-url/
Tags: permalink, urls, mobile, url shortener, url shortening, shorturl, short_url, shortlink, linking, short permalink, short url
Requires at least: 2.5
Tested up to: 2.9.2
Stable tag: trunk
Author: Phil Nelson
Author URI: http://extrafuture.com

la petite url is a personal, self-hosted, URL shortener for WordPress.

== Description ==

la petite url is a personal URL shortener. Using your own Wordpress (2.5+) installation, la petite url allows the user to create shortened, unique, permalinks to their content using a combination of lowercase, uppercase, and numeric characters, which originate from their own domain name. By default la petite url generates a 5-character combination of lowercase letters only, for ease of use in entering on a mobile device or handset. With version 1.5 la petite url allows the user to add a custom, shorter domain for these shortened links.

la petite url supports <a href="http://sites.google.com/a/snaplog.com/wiki/short_url" title="read more about shorturl">shorturl auto discovery</a> and <a href="http://microformats.org/wiki/rel-shortlink" title="Read more about shortlink">rel="shortlink"</a>.

la petite url provides easy functions for accessing it's generated URLs outside of la petite url, in your themes, or other plugins. The `the_full_petite_url` will output just the full URL, without any formatting, which can be used in various Twitter or other microblogging plugins. `the_petite_url_link` will output an HTML link using the configuration from la petite url's options page.

== Installation ==

Installing la petite url is a breeze.

1. Upload the `la-petite-url` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php the_petite_url_link(); ?>` in your template where you'd like the shortened URL link to show up.
1. If you'd like to use a separate domain for your shortened links, <a href="http://extrafuture.com/2009/10/15/using-la-petite-url-with-a-custom-shorter-domain-name/">see this article</a>.

== Screenshots ==

1. la petite url's Domains and Prefix options
2. la petite url's URL generation options
3. la petite url's auto-detection settings

== Changelog ==

= 2.0 =

* Totally rewritten and reorganized options page
* Removed "registration"
* Custom short urls for posts and pages (!)
* Changed hook for redirection from 'template_redirect' to 'init', which is an order of magnitude faster.
* Due to above change, won't interfere with JS-based hit trackers by showing two hits for the same page.
* Terse changelog notes

= 1.6.1 =
* Fixed a bug that resulted in tons of PHP notice logs, due to a badly-formatted database call. Thanks to <a href="http://smithsrus.com/">Doug Smith</a>'s report.

= 1.6 =
* la petite url now generates URLs (on page load) for posts that do not have them.
* Fixed places where 'le petite url' was still referenced
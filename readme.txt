=== Plugin Name ===
Contributors: philnelson
Version: 1.6
Plugin URI: http://extrafuture.com/projects/la-petite-url/
Tags: permalink, urls, mobile, url shortener, url shortening, shorturl, short_url, shortlink, linking
Requires at least: 2.5
Tested up to: 2.8.4
Stable tag: trunk
Author: Phil Nelson
Author URI: http://extrafuture.com

la petite url is an automatic URL shortener, allowing the user to provide simple, easy-to-remember, and easy-to-say URLs for their blog posts and pages.

== Description ==

<strong>NOTE:</strong> la petite url version 1.5.2 and higher defaults to using your shortened URLs as the text of the link from the `the_petite_url_link` function. This setting can be overwritten in the options page.

la petite url is a personal URL shortener. Using your own Wordpress (2.5+) installation, la petite url allows the user to create shortened, unique, permalinks to their content using a combination of lowercase, uppercase, and numeric characters, which originate from their own domain name. By default la petite url generates a 5-character combination of lowercase letters only, for ease of use in entering on a mobile device or handset. With version 1.5 la petite url allows the user to add a custom, shorter domain for these shortened links.

la petite url also supports <a href="http://sites.google.com/a/snaplog.com/wiki/short_url" title="read more about shorturl">shorturl auto discovery</a> and <a href="http://microformats.org/wiki/rel-shortlink" title="Read more about shortlink">rel="shortlink"</a>.

la petite url provides easy functions for accessing it's generated URLs outside of la petite url, in your themes, or other plugins. The `the_full_petite_url` will output just the full URL, without any formatting, which can be used in various Twitter or other microblogging plugins. `the_petite_url_link` will output an HTML link using the configuration from la petite url's options page.

== Installation ==

Installing la petite url is a breeze.

1. Upload the `le-petite-url` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php the_petite_url_link(); ?>` in your template where you'd like the shortened URL link to show up.

== Screenshots ==

1. la petite url's options panel
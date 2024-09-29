<?php
/**
 * Plugin Name: Logo Wall
 * Plugin URI: https://www.your-site.com/
 * Description: This plugin sets a small background wallpaper behind the logo.
 * Version: 0.1
 * Author: Muhammad Saqib Bilal
 * Author URI: https://www.your-site.com/
 **/

function wpb_follow_us($content) {

// Only do this when a single post is displayed
	if ( is_single() ) {

// Message you want to display after the post
// Add URLs to your own Twitter and Facebook profiles

		$content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="http://twitter.com/wpbeginner" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/wpbeginner" title="WPBeginner on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';

	}
// Return the content
	return $content;

}
// Hook our function to WordPress the_content filter
add_filter('the_content', 'wpb_follow_us');
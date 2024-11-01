<?php
/*
Plugin Name: URL cleaner
Plugin URI: http://blog.janzikmund.cz/url-cleaner
Description: After creating URL for page, if still other characters than letters a-z, numbers 0-9 and hyphen (-) are present, they are removed.
Author: Jan Zikmund
Version: 1.0
Author URI: http://www.janzikmund.cz
*/


function url_cleaner_clean($slug) {
	// remove everything except letters, numbers and -
	$pattern = '~([^a-z0-9\-])~i';
	$replacement = '';
	$slug = preg_replace($pattern, $replacement, $slug);
	
	// when more than one - , replace it with one only
	$pattern = '~\-\-+~';
	$replacement = '-';
	$slug = preg_replace($pattern, $replacement, $slug);
	
	return $slug;
}
add_filter('editable_slug', 'url_cleaner_clean');

?>
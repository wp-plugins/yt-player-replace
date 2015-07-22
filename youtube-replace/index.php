<?php
/**
 * @package Youtube Player replace
 */
/*
Plugin Name: Youtube Player replace
Plugin URI: http://gate7news.eu/
Description: Replace Youttube Player with VideoJS HTML5 player
Version: 1.0.0
Author: Thiva7
Author URI: http://www.gate7news.eu/
License: GPLv2 or later
Text Domain: Gate7News
*/



	function change_player($content){

		preg_match('/src="([^"]+)"/', $content, $match);
		$url = $match[1];
		$content = preg_replace('/<iframe.*?\/iframe>/i','[videojs youtube="'.$url.'"]', $content);
		$content = preg_replace('/<iframe.*?\/>/i','[videojs youtube="'.$url.'"]', $content);
		
		
		return $content;

		
}
	
	add_filter('the_content', 'change_player');
?>
<?php
/*
Plugin Name: Sidebar Shortcode
Description: Two shortcodes for WordPress that will allow you to call sidebars or widget areas from the WordPress editor.
Plugin URI: https://github.com/jcasabona/Sidebar-Shortcode
Author: Joe Casabona
Author URI: http://casabona.org
Version: 1.1
License: GPL2
*/

function jc_sidebar_shortcode($atts, $content="null"){
	extract(shortcode_atts(array('name' => ''), $atts));
	
	ob_start();
    get_sidebar($name);
    $sidebar= ob_get_contents();
    ob_end_clean();
	
	return $sidebar;
	
	
}

add_shortcode('get_sidebar', 'sidebar_shortcode');



/** If you want just widgets and not the entire template! **/

function jc_widgets_shortcode($atts, $content=null){
	extract(shortcode_atts(array('name' => ''), $atts));
	
	if (is_active_sidebar($name)){
		ob_start();
    	dynamic_sidebar($name);
    	$widgets= ob_get_contents();
    	ob_end_clean();

    	return $widgets;
	}else{
		return "";
	}
}

add_shortcode('get_widgets', 'widgets_shortcode');


?>
<?php
function sidebar_shortcode($atts, $content="null"){
	extract(shortcode_atts(array('name' => ''), $atts));
	
	ob_start();
    get_sidebar($name);
    $sidebar= ob_get_contents();
    ob_end_clean();
	
	return $sidebar;
	
	
}

add_shortcode('get_sidebar', 'sidebar_shortcode');



/** If you want just widgets and not the entire template! **/

function widgets_shortcode($atts, $content=null){
	extract(shortcode_atts(array('name' => ''), $atts));
	
	if (is_active_sidebar($name)){
		ob_start();
		print "woo widgets";
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
# Sidebar & Widgets Shortcode
___________________________________

Two shortcodes for WordPress that will allow you to call sidebars or widget areas from the WordPress editor. 

## Setup

1. ~~Copy the code from the files into your WordPress theme or plug-in.~~ This is now a plugin! Just added to your plugins directory and install! 
2. That's it! 

## Useage

For the sidebar shortcode: [sidebar_shortcode name=SIDEBARID]. Replace SIDEBARID with the sidebar's ID. 
For the widgets shortcode: [widgets_shortcode name=SIDEBARID]. Replace SIDEBARID with the sidebar's (or widget area's) ID. 

## Some Notes

1. I would recommend prefixing the shortcodes and the functions to avoid conflicts with other plugins or theme code.
2. I wrote a blog post that explains everything here: [Include a Sidebar with a Shortcode in WordPress](http://casabona.org/2014/03/include-sidebar-shortcode-wordpress/)
3. This, like WordPress, is released under the GPL. 

## Changelog

-- Version 1.1 --

* Now plugin-ified!
* Added jc_ prefix to functions. 

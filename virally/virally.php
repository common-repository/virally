<?php
/*
Plugin Name: Virally
Description: A plugin that allows the Virally script to be embedded into a post.
Version: 1.0
Author: Fruitbowl Media
Author URI: http://www.fruitbowlmedia.com
License: GPL2


Copyright 2012  Fruitbowl Media  (email : hello@fruitbowlmedia.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
	
	//[virally id="campaign-id"]
	function virally_func($atts) {
		extract(shortcode_atts(array("id" => ''), $atts));
		return "<script type='text/javascript' src='http://embedded.virallyapp.com/assets/embedded.js?id=$id'></script>";
	}
	add_shortcode('virally', 'virally_func');
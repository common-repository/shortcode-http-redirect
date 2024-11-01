<?php
/*
Plugin Name: ShortCode Http Redirect
Plugin URI: http://genhoi25.com/projects/shortcode-redirect-plugin/
Description: This plugin allows you to add a shortcode to a page. When this shortcode is executed it re-directs the user to a pre-defined URL.
Author: genhoi
Version: 1.0.0

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_shortcode('redirect', 'scr_do_redirect');
function scr_do_redirect($atts)
{
	$url = (isset($atts['url'])) ? esc_url($atts['url']) : "";
	
	if (!empty($url)) {
		wp_safe_redirect($url, 301);
		exit;
	}
}
?>
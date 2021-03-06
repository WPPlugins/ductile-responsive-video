<?php
/*
Plugin Name: Ductile Responsive Video
Plugin URI: http://cubecolour.co.uk/ductile-responsive-video
Description: Modifies native WordPress video embeds to make them responsive.
Author: cubecolour
Version: 1.2.0
Author URI: http://cubecolour.co.uk

	Licenced under the GNU GPL:

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

	Permission is hereby granted, free of charge, to any person
	obtaining a copy of this software and associated documentation
	files (the "Software"), to deal in the Software without restriction,
	including without limitation the rights to use, copy, modify,
	merge, publish, distribute, sublicense, and/or sell copies of
	the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall
	be included in all copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
	OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
	DEALINGS IN THE SOFTWARE.

*/

/*
* Prevent direct access to this file
*
**/
if ( ! defined( 'ABSPATH' ) ) exit;


/*
* Filter embed_oembed_html function to add wrapping div
*
**/
function cc_embed_oembed_html($html, $url, $attr, $post_id) {
	wp_enqueue_style( 'ductile-embed' );
	return '<div class="embed-wrap">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'cc_embed_oembed_html', 99, 4);


/*
* Register the ductile-embed stylesheet
*
**/
function cc_ductile_embed_css() {
	wp_register_style( 'ductile-embed', plugin_dir_url(__FILE__).'css/ductile-embed.css' , false, '1.2.0', 'screen' );
}

add_action( 'wp_enqueue_scripts', 'cc_ductile_embed_css', 30 );



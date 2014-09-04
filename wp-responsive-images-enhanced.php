<?php

/**
 * Plugin Name: WP Responsive Images Enhanced
 * Plugin URI: https://github.com/fagia/wp-responsive-images-enhanced
 * Description: Adds support for showing and managing responsive images.
 * Version: 0.0.1
 * Author: Matteo Cajani
 * Author URI: http://fagia.martjanplanet.com
 * License: GPL2
**/

/**
 * Copyright 2014 Matteo Cajani (email : matteo.cajani@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
**/

if (! defined ( 'ABSPATH' )) {
	die ( 'No script kiddies please!' );
}

if ( is_admin() ) {
	define ( 'WPRIE_PATH', dirname ( __FILE__ ) . '/' );
	define ( 'WPRIE_URL', plugins_url ( basename ( dirname ( __FILE__ ) ) ) . '/' );
	define ( 'WPRIE_EDIT_IMAGE_ACTION', 'wprie-edit-thumbnails' );
	define ( 'WPRIE_DOMAIN', 'wprie' );
	
	wp_enqueue_style( 'media-views' );
	wp_enqueue_style( 'wprie-admin-css', WPRIE_URL . 'css/wprie-admin.css' );
	wp_enqueue_style( 'wprie-cropper-css', WPRIE_URL . 'js/cropper/cropper.min.css' );
	wp_enqueue_script( 'wprie-cropper-js', WPRIE_URL . 'js/cropper/cropper.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'wprie-admin-js', WPRIE_URL . 'js/wprie-admin.js', array( 'wprie-cropper-js' ), false, true );
	
	require_once (WPRIE_PATH . 'inc/utils.php');
	require_once (WPRIE_PATH . 'inc/image-editor.php');
	require_once (WPRIE_PATH . 'inc/extend-admin-media.php');
	require_once (WPRIE_PATH . 'inc/extend-admin-media-lightbox.php');
	require_once (WPRIE_PATH . 'inc/extend-admin-post.php');
	require_once (WPRIE_PATH . 'inc/extend-admin-options-media.php');
}

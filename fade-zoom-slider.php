<?php

/**
 * Plugin Name:       Fade Zoom Slider
 * Description:       A slick slider gallery block.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Logan Duran
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fade-zoom-slider
 *
 * @package Loganduran
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function loganduran_fade_zoom_slider_block_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'loganduran_fade_zoom_slider_block_init');

<?php
/**
 * Plugin Name:       Plugin Boilerplate
 * Description:       Plugin Boilerplate.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Dan
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-boilerplate
 *
 */


function blocks_course_plugin_boilerplate_enqueue_assets() {

    wp_enqueue_script( 'blocks-course-plugin-boilerplate-script', 
    plugins_url('index.js', __FILE__));
}

add_action( 'enqueue_block_editor_assets', 'blocks_course_plugin_boilerplate_enqueue_assets' );
<?php
/**
 * @package Akismet
 */
/*
Plugin Name: Alecaddd Plugin
Plugin URI: https://akismet.com/
Description: It helps you to create custome post type. To get started: activate the Alecaddd plugin and then go to your books Settings page to set up your first custom post.
Version: 1.0.0
Author: Sawan Wasnik
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// if this file is called directly, abort.
defined('ABSPATH') or die('hey you can\'t access this file');

//Required once the composer Autoload.
if(file_exists (dirname(__FILE__). '/vendor/autoload.php')) {
	require_once dirname(__FILE__).'/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_alecaddd_plugin');

/**
 * The code that runs during plugin activation
 */
function deactivate_alecaddd_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_activation_hook(__FILE__, 'deactivate_alecaddd_plugin');

if(class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}
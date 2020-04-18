<?php
/**
 * Plugin Name: Elemex
 * Plugin URI: http://themehoster.com/plugins/elemex
 * Description: Best Addons for Elementor
 * Version: 0.0.1
 * Author: Omexer
 * Author URI: http://themehoster.com/
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: elemex
 * Domain Path: /languages/
 *
 * @package Elemex
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

Copyright 2020 Elemex
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require plugin_dir_path( __FILE__ ) . 'base.php';

\Elemex\Elementor\Base::instance();

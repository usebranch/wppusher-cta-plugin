<?php
                

/**
* Plugin Name: WP Pusher CTA Block
* Plugin URI: https://wppusher.com
* Description: This plugin adds a CTA block to prompt users to checkout WP Pusher
* Version: 0.0.1
* Requires at least: 5.7
* Requires PHP:      7.1.0
* Author:            WP Pusher
* Author URI:        https://wppusher.com
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       wp-pusher-cta-block
* Domain Path:       /languages
*/

// Include wppusher-cta
include_once dirname( __FILE__ ) . '/blocks/wppusher-cta/init.php';

include_once dirname( __FILE__ ). '/inc/functions.php';
include_once dirname( __FILE__ ). '/inc/hooks.php';
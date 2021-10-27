<?php

/**
 * @package WPmesbox
 */

/*
Plugin Name: WPmesbox
Description: Web socket private message box
Version: 1.0.0
Author: james.standbridge.git@gmail.com
Author URI: https://github.com/JamesStandbridge
Licence: GPLv2 or ob_deflatehandler
Text Domain: WPmesbox
*/


if (!defined('ABSPATH')) 
    exit;


define( 'WPMB_VERSION', '1.0.0' );
define( 'WPMB_REQUIRED_WP_VERSION', '5.7' );
define( 'WPMB_TEXT_DOMAIN', 'contact-form-7' );
define( 'WPMB_PLUGIN', __FILE__ );
define( 'WPMB_PLUGIN_BASENAME', plugin_basename(WPMB_PLUGIN));
define( 'WPMB_PLUGIN_NAME', trim(dirname(WPMB_PLUGIN_BASENAME), '/'));
define( 'WPMB_PLUGIN_DIR', untrailingslashit(dirname(WPMB_PLUGIN)));
define( 'WPMB_PLUGIN_MODULES_DIR', WPMB_PLUGIN_DIR . '/modules');
define( 'WPMB_PLUGIN_HOST_DIR', plugins_url(__FILE__));

if(WP_DEBUG && WP_DEBUG_LOG)
    include_once(WPMB_PLUGIN_DIR . "/includes/dev/devTools.php");


class WPMB {
    function activate()
    {
        dd("test");
    }
}

if(class_exists("WPMB"))
    $plugin = new WPMB();

register_activation_hook(__FILE__, array($plugin, 'activate'));

require_once WPMB_PLUGIN_DIR . '/load.php';
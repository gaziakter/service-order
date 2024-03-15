<?php
/**
 * Plugin Name:       Service Order
 * Plugin URI:        https://gaziakter/plugin/service-order/
 * Description:       Service Order plugin is custom service order by woocommerce product.
 * Version:           1.0.0
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       service-order
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Main Class
class serord_main_class{

    //construct function for hook
    public function __construct(){
        add_action( 'init', array($this, 'serord_load_textdomain') );

    }

    // textdomain funciton
    public function serord_load_textdomain() {
        load_theme_textdomain( 'service-order', plugin_dir_path( __FILE__ ) . '/languages' );
    }
}

new serord_main_class();
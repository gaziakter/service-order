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
        add_action( 'init', [$this, 'serord_load_textdomain'] );
        add_shortcode('service_order', [$this, 'serord_shortcode_function'] );
        add_action('wp_enqueue_scripts', [$this, 'serord_enqueue_scripts']);


    }

    // textdomain funciton
    public function serord_load_textdomain() {
        load_theme_textdomain( 'service-order', plugin_dir_path( __FILE__ ) . '/languages' );
    }

    //Plugin shortcode
    public function serord_shortcode_function( ){
        ob_start();
        ?>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                <form action="#" class="space-y-8">
                    <div>
                        <label for="project_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Title</label>
                        <input type="text" id="project_title" name="project_title" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Write the project title here" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="project_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Project Description</label>
                        <textarea id="project_description" name="project_description" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write description of the project here..."></textarea>
                    </div>
                    <div>
                    <label for="service_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select the service</label>
                        <select id="service_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option>Select the service</option>
                            <option>WebSite Development </option>
                            <option>WordPress Security</option>
                            <option>WordPress Speed Optimization</option>
                        </select>
                    </div>
                    <div>
                    <label for="package_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select the Package</label>
                        <select id="package_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option>Select the Package</option>
                            <option>Basic </option>
                            <option>Standard</option>
                            <option>Premium</option>
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </section>
        <?php
        return ob_get_clean(); 
    }

    //Enqueue tailwind
    public function serord_enqueue_scripts(){
        wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', [], '1.0');
    }
}

new serord_main_class();

?>

<form class="max-w-sm mx-auto">
  <label for="package_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select the Package</label>
  <select id="package_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

    <option>Select the Package</option>
    <option>Basic </option>
    <option>Standard</option>
    <option>Premium</option>
  </select>
</form>

<?php
/**
 * VZR_Module_Example
 * Just a class for example
 *
 * @package         VZR_Plugin
 * @subpackage      VZR_Module_Example
 * @since           1.0.0
 *
 */

// If this file is called directly, call the cops.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! class_exists( 'VZR_Module_Example' ) ) {
    class VZR_Module_Example {

        /**
         * The Core object
         *
         * @since    1.0.0
         * @var      VZR_Plugin    $core   The core class
         */
        private $core;

        /**
         * The Module Indentify
         *
         * @since    1.0.0
         */
        const MODULE_SLUG = "example";

        /**
         * Define the core functionalities into plugin.
         *
         * @since    1.0.0
         * @param    VZR_Plugin      $core   The Core object
         */
        public function __construct( VZR_Plugin $core ) {
            $this->core = $core;
        }

        /**
         * Register all the hooks for this module
         *
         * @since    1.0.0
         * @access   private
         */
        private function define_hooks() {
        }

        /**
         * After Run method. Optional.
         *
         * @since    1.0.0
         * @access   private
         */
        public function after_run() {
        }

        /**
         * Run the module.
         *
         * @since    1.0.0
         */
        public function run() {
            $this->define_hooks();

            /**
             * To include files at running mobule just set this->include
             * as a array of filenames considering /includes as root directory
             * without .php extension. For example:
             */
            $this->includes = [
                'class-example-included',
                'function-example'
            ];
        }
    }
}

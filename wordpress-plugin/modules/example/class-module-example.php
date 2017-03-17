<?php
/**
 * VZ_Module_Example
 * Just a class for example
 *
 * @package         VZ_Plugin
 * @subpackage      VZ_Module_Example
 * @since           1.0.0
 *
 */

// If this file is called directly, call the cops.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! class_exists( 'VZ_Module_Example' ) ) {
    class VZ_Module_Example {

        /**
         * The Core object
         *
         * @since    1.0.0
         * @var      VZ_Plugin    $core   The core class
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
         * @param    VZ_Plugin      $core   The Core object
         */
        public function __construct( VZ_Plugin $core ) {
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
         * Run the module.
         *
         * @since    1.0.0
         */
        public function run() {
            $this->define_hooks();
        }
    }
}

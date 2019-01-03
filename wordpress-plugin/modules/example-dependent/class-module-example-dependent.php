<?php
/**
 * VZR_Module_Example_Dependent
 * Just a dependent module: will be loaded after example one.
 *
 * Depends: example
 *
 * @package         VZR_Plugin
 * @subpackage      VZR_Module_Example_Dependent
 * @since           1.0.0
 *
 */

// If this file is called directly, call the cops.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! class_exists( 'VZR_Module_Example_Dependent' ) ) {
    class VZR_Module_Example_Dependent {

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
        const MODULE_SLUG = "example-dependent";

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
         * Run the module.
         *
         * @since    1.0.0
         */
        public function run() {
        }
    }
}

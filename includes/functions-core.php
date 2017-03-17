<?php

function vz_log( $message, $file = 'errors.log' ) {
    error_log( $message . "\n", 3, VZ_PLUGIN_PATH . '/' . $file );
}
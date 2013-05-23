<?php

function get_config() {
    $config = array();
    $dir = ROOT_PATH . "/app/config/";
    $dh  = opendir( $dir );
    while ( false !== ( $filename = readdir( $dh ) ) ) {
        if ( $filename != '.' && $filename != '..' ) {
            $name = explode( '.', $filename );
            $config[$name[0]] = parse_ini_file( $dir . $filename );
        }
    }
    return $config;
}

class Config {
    public static function get( $index ) {
        $index = explode( '.', $index );
        return self::getValue( $index, get_config() );
    }
    private static function getValue( $index, $value ) {
        if ( is_array( $index ) and
            count( $index ) ) {
            $current_index = array_shift( $index );
        }
        if ( is_array( $index ) and
            count( $index ) and
            is_array( $value[$current_index] ) and
            count( $value[$current_index] ) ) {
            return self::getValue( $index, $value[$current_index] );
        } else {
            return $value[$current_index];
        }
    }
}

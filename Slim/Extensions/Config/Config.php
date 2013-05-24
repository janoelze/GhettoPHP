<?php

require_once dirname(__FILE__) . '/Toml/Parser.php';

function get_config() {
    $config = array();
    $dir = ROOT_PATH . "/app/config/";
    $dh  = opendir( $dir );
    while ( false !== ( $filename = readdir( $dh ) ) ) {
        if ( $filename != '.' && $filename != '..' ) {
            $name = explode( '.', $filename );
            $parsed_config = array();
            if( $name[1] == 'toml' ){
                $parsed_config = Toml\Parser::fromFile( $dir . $filename );
            }elseif( $name[1] == 'ini' ){
                $parsed_config = parse_ini_file( $dir . $filename );
            }
            
            $config[$name[0]] = $parsed_config;
        }
    }
    return $config;
}

class Config {
    public static function get( $index = false ) {
        if (!$index) {
            return get_config();
        }else{
            $index = explode( '.', $index );
            return self::getValue( $index, get_config() );
        }
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

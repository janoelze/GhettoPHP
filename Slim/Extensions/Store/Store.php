<?php

require_once 'flintstone.class.php';

function get_db(){
    return new Flintstone( array( 'dir' => ROOT_PATH . '/app/data/' ) );
}

class Store {
    public static function set( $table, $key, $value ) {
        $db = get_db();
        
        $t = $db->load( $table );
        return  $t->set( $key, $value );
    }
    public static function get( $table, $key ) {
        $db = get_db();
        
        $t = $db->load( $table );
        return $t->get( $key );
    }
    public static function get_keys( $table ) {
        $db = get_db();
        
        $t = $db->load( $table );
        return $t->getKeys();
    }
    public static function delete( $table, $key ) {
        $db = get_db();
        
        $t = $db->load( $table );
        return $t->delete( $key );
    }
}

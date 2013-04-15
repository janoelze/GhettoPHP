<?php

class Store {
    function __construct() {
        require_once 'flintstone.class.php';
        $this->db = new Flintstone( array( 'dir' => dirname( __FILE__ ) . '/data/' ) );
    }
    public function save( $table, $key, $value ) {
        $t = $this->db->load( $table );
        if ($t->set( $key, $value )) {
            return true;
        }
    }
    public function get( $table, $key ) {
        $t = $this->db->load( $table );
        return $t->get( $key );
    }
    public function get_keys( $table ) {
        $t = $this->db->load( $table );
        return $t->getKeys();
    }
    public function delete( $table, $key ) {
        $t = $this->db->load( $table );
        $t->delete( $key );
    }
}

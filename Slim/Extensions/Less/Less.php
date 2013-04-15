<?php

class Less {
    function __construct() {
        require_once 'lessc.inc.php';
        $this->less = new lessc;
    }
    public function watch( $input, $output ){
        $this->less->checkedCompile( $input, $output );
    }
}

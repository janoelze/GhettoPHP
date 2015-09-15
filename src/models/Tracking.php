<?php

class Tracking {
    static function insert($key, $value){
        $tracking_item = R::dispense('tracking');

        $tracking_item->key = $key;
        $tracking_item->value = $value;

        $tracking_item->created_at = time();
        $tracking_item->ip = $_SERVER['REMOTE_ADDR'];

        return R::store($tracking_item);
    }
}

?>

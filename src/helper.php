<?php

function partial($name){
    return sprintf('%s/%s.php', config('app.partials_path'), $name);
}

function config($path){
    global $config;

    return resolve($config, $path);
}

function resolve(array $a, $path, $default = null){
    $current = $a;
    $p = strtok($path, '.');

    while ($p !== false) {
        if (!isset($current[$p])) {
            return $default;
        }

        $current = $current[$p];
        $p = strtok('.');
    }

    return $current;
}

?>

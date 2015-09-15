<?php

    $app->get('/', function() use ($app, $config){
        return $app->render('main.php', [
            'date' => date('d.m.Y h:i:s')
        ]);
    });

?>

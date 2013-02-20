<?php

require 'inc/functions.php';
require 'Slim/Slim.php';

$app = new Slim();

require 'inc/config.php';

$app->get('/',function() use ($app){
    $app->render('default.php', array(
        'a' => 'b'
    ));
});

$app->run();

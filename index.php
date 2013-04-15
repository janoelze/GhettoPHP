<?php

require 'inc/functions.php';
require 'Slim/Slim.php';

$app = new Slim();

$app->less->watch('assets/style/source.less','assets/style/style.css');

$app->get( '/', function() use ( $app ) {
        $app->render( 'default.php', array(
                'a' => 'b'
            ) );
    } );

$app->run();

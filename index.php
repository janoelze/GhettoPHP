<?php

require 'Slim/Slim.php';
$app = new Slim();

$app->less->watch( 'app/assets/style/source.less', 'app/assets/style/style.css' );

$app->get( '/', function() use ( $app ) {
        $app->render( 'default.php', array() );
    } );

$app->run();

<?php

require 'Slim/Slim.php';
$app = new Slim();

// $app->less->watch($input,$output) converts the less-file to css.
$app->less->watch( 'app/assets/style/source.less', 'app/assets/style/style.css' );

$app->get( '/', function() use ( $app ) {

        // The function "get_ip()" is available because all files
        // from the directory "/app/src" are automatically loaded.
        $user_ip = get_ip();

        // Saving the current UNIX-timestamp to the database.
        Store::set( 'requests', 'last_request_time', time() );

        // Now we retrieve that timestamp from the database
        // and hand it to the template-file.
        $app->render( 'default.php', array(
                'user_ip' => $user_ip,
                'last_request_time' => Store::get( 'requests', 'last_request_time' )
            ) );

    } );

$app->run();

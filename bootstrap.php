<?php

$app = new Slim([
    'templates.path' => config('app.templates_path')
]);

/* watching less files */

foreach (glob("public/css/*.less") as $filename){
    $out_filename = str_replace('.less', '.css', $filename);
    $app->less->watch($filename, $out_filename);
}

/* db setup */

R::setup( 'sqlite:data/v1.db' );

/* importing models */

foreach (glob("src/models/*.php") as $filename){
    # import routes
    if ($filename[0] != '.') {
        include $filename;
    }
}

/* importing routes */

foreach (glob("src/routes/*.php") as $filename){
    # import routes
    if ($filename[0] != '.') {
        include $filename;
    }
}

/* importing hooks */

foreach (glob("src/hooks/*.php") as $filename){
    # import routes
    if ($filename[0] != '.') {
        include $filename;
    }
}

$app->run();

?>

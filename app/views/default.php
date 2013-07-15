<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<?php include('app/views/partials/head.php'); ?>
	</head>
	<body>
    <div class="container_12">
        <div class="grid_2">
            <h1 id="logo">Junbi</h1>
        </div>
        <div class="grid_10">
            <pre><?php print json_pretty_print(json_encode(Config::get('application'))); ?></pre>
        </div>
	</body>
</html>

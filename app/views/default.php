<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<?php include('app/views/partials/head.php'); ?>
	</head>
	<body>
		<h1 id="logo">Junbi</h1>
        <p>
            <pre><?php print json_pretty_print(json_encode(Config::get('application'))); ?></pre>
        </p>
	</body>
</html>

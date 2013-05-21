<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<?php include('app/views/partials/head.php'); ?>
	</head>
	<body>
		<h1>It works!</h1>
		<p>
			This is the default.php template-file. It's located in /app/templates/
		</p>
		<hr>
		<i>
			Request time: <?php print $last_request_time; ?>
			IP: <?php print $user_ip; ?>
		</i>
	</body>
</html>

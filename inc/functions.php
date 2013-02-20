<?php
	function get_conf($key){
		global $app;
		return $app->config[$key];
	}
?>

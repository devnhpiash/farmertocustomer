<?php 
$config = require_once dirname(__DIR__, 2) . '/config.php';
$db=mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

if (!$db) {
	echo '<script>alert("Database Connection Failded. Please Contact With Developer")</script>';
}

if (!session_id()) {
	session_start();
}
 ?>
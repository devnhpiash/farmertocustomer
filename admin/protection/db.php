<?php 
$config=include("config.php");
$db=mysqli_connect($config["db_host"],$config["db_user"],$config["db_pass"],   $config["db_name"]);


if($db->connect_error) {
    die("". $db->connect_error);
}
 ?>
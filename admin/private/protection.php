<?php
include_once ("db.php");

if (!isset($_SESSION["admin_id"])) {
header("location:signin.php");
}else{

}
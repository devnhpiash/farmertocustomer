<?php   
include_once "db.php";

if (!isset($_SESSION["uid"])) {
    header("location:../index.php");
}else{
    $uid= $_SESSION["uid"];
    $uname= $_SESSION["uname"];
    $uemail= $_SESSION["uemail"];
    $utype= $_SESSION["utype"];
}
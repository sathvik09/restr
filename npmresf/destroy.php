<?php 
session_start();
$tbl = $_SESSION["tno"];
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");

mysqli_query($conn,"DELETE FROM `customer_order` WHERE table_no='$tbl'");
session_destroy();

header("location:index.php");
?>
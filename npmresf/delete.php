<?php 
    
session_start();
   $json = file_get_contents("php://input");
   $data = json_decode($json,true);
   
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");
$qu=$data['quan'];
$name=$data['dishn'];
$de=mysqli_query($conn,"Update customer_order set quantity='$qu' where dishname='$name'");
echo json_encode(array("x"=>$data["quan"]));

//header("location:bill.php")
?>
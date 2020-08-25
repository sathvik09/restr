<?php

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);

$conn ->select_db($db) or die( "Unable to select database");
if(isset($_POST['mexadd']))
{
    echo $_POST['mexadd'];
}
if(isset($_GET['add']))
{   $mid=$_GET['add'];
    $dishname=$_GET['dishname'];
    $price=$_GET['price'];
    $quantity=$_GET['quantity'];
    $result = mysqli_query($conn,"INSERT INTO customer_order(dishname,price,quantity) VALUES('$dishname','$price','$quantity')");
}

if(isset($_POST['addtable'])){
    $table_no=$_POST['table_no'];
    $result = mysqli_query($conn,"INSERT INTO customer_order(table_no) VALUES('$table_no')");
}

?>
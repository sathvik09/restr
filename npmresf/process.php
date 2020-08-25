<?php

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);

$conn ->select_db($db) or die( "Unable to select database");
if(isset($_POST['add']))
{
    $category=$_POST['category'];
    $mid=$_POST['mid'];
    $dishname=$_POST['dishname'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    //echo "hello";
    $result = mysqli_query($conn,"INSERT INTO menulist VALUES('$category','$dishname','$price','$description','$mid')");
    header('location:menu.php');
}
//get is required and action when dlt is pressed
if(isset($_GET['delete'])){
    $mid = $_GET['delete'];
    $result= mysqli_query($conn,"DELETE FROM menulist WHERE mid=$mid") or die('Unable to dlt');
    header('location:menu.php');
}

$category='';
$dishname='';
$price='';
$mid='';
$description='';
$update = false;
if(isset($_GET['edit'])){
    $mid = $_GET['edit'];
    $update = true;
    $result = mysqli_query($conn,"SELECT * FROM menulist WHERE mid=$mid") or die('Unable to edt');
    $row=$result->fetch_array();
    $mid = $row['mid'];
    $category=$row['category'];
    $dishname=$row['dishname'];
    $price=$row['price'];
    $description=$row['description'];
    
}

if(isset($_POST['update'])){
    $mid = $_POST['mid'];
    $category=$_POST['category'];
    $dishname=$_POST['dishname'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $result = mysqli_query($conn,"UPDATE menulist SET category='$category', dishname='$dishname' , price='$price', description='$description' WHERE mid=$mid");
   
    header('location:menu.php');
}


?>

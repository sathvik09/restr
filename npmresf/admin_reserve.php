<?php

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);

$conn ->select_db($db) or die( "Unable to select database");
if(isset($_POST['firstname']))
{   $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $date=$_POST['date'];
    $party=$_POST['party'];
    $phone=$_POST['phone'];
    $value = $_POST['value'];
$q1=mysqli_query($conn,"INSERT INTO reservations VALUES('$fname','$lname','$party','$phone','$date')");
$sql = "SELECT numCus from restr where `name`='$value'";
$res = mysqli_query($conn,$sql);
$ans = 0;
foreach($res as $row)
{
  $ans = $row['numCus'];
}

$ans+=1;
$sql1 = "UPDATE restr set numCus=$ans where `name` = '$value'";
mysqli_query($conn,$sql1);
header('location:reserve.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
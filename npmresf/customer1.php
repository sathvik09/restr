<?php

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);



$conn ->select_db($db) or die( "Unable to select database");
if(isset($_POST['category']))
{
    
$host='localhost';
$user='root';
$password='';
$db='npm_res';
$conn = new mysqli($host, $user, $password,$db);



$conn ->select_db($db) or die( "Unable to select database");
$category1=$_POST['category'];
$dishname1=$_POST['dishname'];
$quantity=$_POST['quantity'];
$table_no=$_POST['table_no'];

$result = mysqli_query($conn,"INSERT INTO customer_order VALUES('$category1','$dishname1','$quantity','$table_no')");
}
//$result = mysqli_query($conn,"INSERT INTO customer_order VALUES('sd','scd',1,3)");

//$row = mysqli_fetch_assoc($result);

//echo $row['category'];

//$a1= mysqli_num_rows($result);

$q1=mysqli_query($conn,"Select menulist.price,customer_order.quantity from menulist INNER JOIN customer_order ON customer_order.category=menulist.category AND customer_order.dishname=menulist.dishname AND customer_order.table_no='$table_no'");
while($row1=mysqli_fetch_assoc($q1))
{
echo "bill=".$row1['price']*$row1['quantity']."<br>";
//echo $row1['quantity'];
//echo "1";
}
$a= mysqli_num_rows($q1);
echo $a;

?>
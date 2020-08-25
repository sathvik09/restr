<?php

  session_start();
   
   $json = file_get_contents("php://input");
   $data = json_decode($json,true);
  
$db="npm_res";
$conn = new mysqli("localhost","root","","npm_res");
$conn ->select_db($db) or die( "Unable to select database");

  $name=$data['name'];
  
  $qty=$data['quantity'];
  $t_no = $_SESSION['tno'];
  if($data['quantity']>0)
  {
    $ch=mysqli_query($conn,"Select * from customer_order where dishname='$name' and table_no='$t_no'");
   // echo mysqli_num_rows($ch);
    if(mysqli_num_rows($ch)==0)
    {
   $res= mysqli_query($conn,"Insert into customer_order values('$data[type]','$data[name]','$data[quantity]','$_SESSION[tno]')");
    }
    else
    {
      echo "yes";
            $getq=mysqli_query($conn,"select quantity from customer_order where dishname='$name'");
      $geq=mysqli_fetch_assoc($getq);
      $q=$geq['quantity'];
      $q+=$data['quantity'];
      $ret=mysqli_query($conn,"update customer_order set quantity='$q' where dishname='$name' ");
    }
  }

   // echo json_encode(array("ok"=>$data["name"]));

   $result[] = array("n"=>$data["name"],"n1"=>$data["quantity"],"n3"=>$data["type"],"n4"=>$_SESSION["tno"]);
   echo json_encode($result);
  ?>
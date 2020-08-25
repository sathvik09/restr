<?php
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");
  if(isset($_GET["opt_val"])){
      $x = $_GET["opt_val"];

      $sql = "Select dishname from menulist where category='$x'";
      $result = mysqli_query($conn,$sql);
      foreach($result as $row)
      {
          $dish=$row['dishname'];
          $results[] = array("dishname" => $dish);
      }
      echo json_encode($results);
  }
?>
<?php 
  $host='localhost';
  $user='root';
  $password='';
  $db='npm_res';
  
  $conn = new mysqli($host, $user, $password,$db);
  $conn ->select_db($db) or die( "Unable to select database");
  if(isset($_POST['name']))
  {
    $name=$_POST['name'];
    $category=$_POST['category'];
   $q2=mysqli_query($conn,"Select max(sno) from restr");
    $sno=0;
    while($row = mysqli_fetch_assoc($q2))
    {
        $sno=$row['max(sno)'];
    }
    echo $sno;
    $sno+=1;
    $nunmcus=0;
    $totalcus=0;
    $q1=mysqli_query($conn,"Insert into restr values('$sno','$name','$category','$nunmcus','$totalcus')");
    
header('location:csvf.php');
  }

?>
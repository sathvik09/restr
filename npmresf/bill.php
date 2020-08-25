<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bill</title>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
      body {
        font-family: "Lato", sans-serif;
      }

      .main-head {
        height: 150px;
        background: #fff;
      }

      .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
      }

      .main {
        padding: 0px 5px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }
      }

      @media screen and (max-width: 450px) {
        .bill2 {
          margin-top: 10%;
        }

      }

      @media screen and (min-width: 768px) {
        .main {
          margin-left: 40%;
        }

        .sidenav {
          width: 20%;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
        }

        .bill2 {
          margin-top: 10%;
        }

        
      }

      .bill1 {
        margin-top: 20%;
        padding: 60px;
        color: #fff;
      }

      .a {
          margin-top: 60%;
          padding-left: 15%;
      }

      .bill1 h2 {
        font-weight: 300;
      }

      .btn-black {
        color: black;
        background-color: white;
        
      }
    </style>
  </head>

  <body>
    <div class="sidenav">
      <div class="bill1">
        <h2>
         NPM RESTAURANT<br />
          
        </h2>
        <br><br>
        <p>TABLE NO <?php if(isset($_SESSION['tno']))
{ echo $_SESSION['tno']; } ?></p><br><br>
        <p>THANK YOU</p>
      </div>

      <div class="a">
      <a type="submit" class="btn btn-black" href="customer.php">Add Dish</a>
            <a type="submit" class="btn btn-black" href="destroy.php">CheckOut</a>
      </div>
    </div>
    <div class="main">
      <div class="col-md-6 col-sm-12">
        <div class="bill2">
        <h1 class=""><b>Your Order</b></h1></div>
      
<?php

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");
$bill=0;

$tno=$_SESSION['tno'];
//echo $tno;  
   
$ans=1;
$res=mysqli_query($conn,"Select quantity,dishname from customer_order where table_no='$tno' ");
$count=mysqli_query($conn,"select distinct dishname from customer_order where table_no='$tno'");
//echo mysqli_num_rows($res)."<br>";

$sq=mysqli_query($conn,"Select dishname,sum(quantity) from customer_order where table_no='$tno' group by dishname");
$nor=mysqli_num_rows($sq);
$z=0;
// while($row7 = mysqli_fetch_assoc($sq))
// {
//   echo $row7['dishname']."<br>".$row7['sum(quantity)']."<br>"; 
// }
?>

<?php while($row = mysqli_fetch_assoc($sq)): ?>
  
 <?php
     $rdish=$row['dishname']; 
     $tn=$_SESSION['tno'];
    
    $res1=mysqli_query($conn,"Select * from menulist where dishname='$rdish'");
    $row2=mysqli_fetch_assoc($res1);
    $q=$row['sum(quantity)']; 
?>
<?php if($q==0) {continue;}?>
<ul class="list-group list-group-flush">
 
<li class="list-group-item">
<?php 

    $prep2 = "<span class='d-flex justify-content-end'>";
    $append2 = "</span>";
  echo $row['dishname'];
   echo $prep2.$row['sum(quantity)'];
   echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   echo $row2['price'];
   echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  
   echo "<input type= 'button' class='btn btn-secondary dele' id='$rdish' name='$q' value='delete' onclick='del()'></input>".$append2;
 ?> 
  </li>
 
</ul>
<?php  

     $bill=$bill+($q*$row2['price']); ?>
     

     <?php endwhile; ?>
    
     <ul class="list-group list-group-flush">
     <li class="list-group-item list-group-item-secondary d-flex justify-content-end"><?php echo "Rs. ".$bill; ?></li>
</ul>
<?php 
    //if()
    //header("refresh:10"); 
    
    ?>
</div>
    </div>
  
    <script src="js/delete.js"></script>
    
  </body>
</html>

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
        margin-top: 0%;
        padding: 30px;
        color: #fff;
      }

      .a {
          margin-top: 50%;
          
      }

      .b{
          margin-top: 100%;
      }

      .bill1 h2 {
        font-weight: 300;
      }

      .btn-black {
        color: black;
        background-color: white;
        
      }

      .c {
        margin-top: 100%;
      }
    </style>
  </head>

  <body>

    <div class="sidenav">
      <div class="bill1">
        <h2>
        &nbsp;&nbsp; NPM  &nbsp;&nbsp;RESTAURANT<br />
          
        </h2>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;ADMIN AREA</p>
            

        <div class="a">

        <form action="tableorder.php" method="post">
 
 <div class="input-group mb-3">
  
   <input type="text" class="form-control" name="table_no" placeholder="Table No" aria-label="" aria-describedby="basic-addon1">
   <input type="submit" value="View Order" class="btn btn-light" name="view">
 </div>
 
   <div class="c">
            <a type="submit" class="btn btn-black" href="index.php">Logout</a>
     </div>
      </div>
      </div>
</div>
<div class="main">
      <div class="col-md-6 col-sm-12">
        <div class="bill2">
        <h1 class="display-1">All Orders</h1>
        <?php
session_start();
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");
$bill=0;
if(isset($_SESSION['tno']))
{
$tno=$_SESSION['tno'];
}
//echo $tno;  
$res=mysqli_query($conn,"Select * from customer_order");
?>
<div class="container">
<div class="row">
  <table class="table">
  <thead class="thead" style="background-color: white;">
  <tr>
<th scope="col">Table</th>
<th scope="col">Dishname</th>
<th scope="col">Quantity</th>
<th scope="col">Price</th>
<th scope="col">Delivered</th>
 </tr>
  </thead>
<?php
 while($row = mysqli_fetch_assoc($res)): ?>
 
 <?php
     $rdish=$row['dishname']; 
    $res1=mysqli_query($conn,"Select * from menulist where dishname='$rdish'");
    // echo $row['category'];
    $row2=mysqli_fetch_assoc($res1);
    $q=$row['quantity']; 
?>

<tr>
<td><?php echo $row['table_no'];?></td>
<td><?php echo $row['dishname'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php  echo $row2['price'];?></td>
<td><div class="form-check">
  <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1">

</div></td>
</tr>

<?php endwhile; ?>
</div>
<br>

 </div>      
</div>
    </div>
  </body>
</html>




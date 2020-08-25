<?php

session_start();

$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");


/*if(isset($_POST['table_no']))
{
  $tno=$_POST['table_no'];

  echo '<script type="text/JavaScript">  
     alert("Order set to table number "); 
     </script>' ;
  echo "Order set to table number ".$tno;
}*/
if(isset($_POST['category']))
{
$category=$_POST['category'];
$mid=$_POST['mid'];
$dishname=$_POST['dishname'];
$price=$_POST['price'];
$description=$_POST['description'];
//echo "hello";
$result = mysqli_query($conn,"INSERT INTO menulist VALUES('$category','$dishname','$price','$description','$mid')");
}
//$row = mysqli_fetch_assoc($result);

//echo $row['category'];

?>
<!DOCTYPE html>
   <html>
   <head>
   <title>NPM RESTAURANT</title>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/selected.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/placeorder.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">   
</script> 
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index.php">NPM RESTAURANT</a>
    
          <ul class="nav navbar-nav navbar-right">
 
     
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="customer.php">Place Order</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Admin</a>
      </li>
         <li class="nav-item active" active>
      <a class="nav-link" style="margin-left:65vw" href="">  
      <?php if(isset($_SESSION['tno']))
{ echo "Table no ".$_SESSION['tno']; } ?></a></li>
    </ul>
  </div>
  </nav>

<br>
<div class="container">
    <div class="contact-title">
        <h1 class="display-1">Place Your Order</h1>
</div>

<br><br>
<form id="settable" action="" method="POST">
 
<div class="input-group mb-3">
  <?php 
if(!isset($_SESSION['tno']))
{

  echo "<input type='text' class='form-control' id='tabin' name='table_no' placeholder='Enter Table_No' aria-label='' aria-describedby='basic-addon1' required>";
 echo "<input type='submit' value='Submit' class='btn btn-light' id='tabno'  name='addtable' onclick='display()'   >";
}
else {"<br><br>";}
?>
<script src="submit1.js"></script>
  </div>
  </form>
  <?php  
     if(isset($_POST['addtable']))
     {
       $_SESSION['tno']=$_POST['table_no'];
       header("location:customer.php");
     }  
  ?>
</div>
<div class="container mt-5">
    <div class="card-deck">

    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/foodmenu.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <?php if(isset($_SESSION['tno']))
     {
     echo "<a class='btn btn-warning' href='foodmenu.php'>Go To Food Menu</a>";
     }
     ?>
    </div>
  </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/beveragemenu.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
    <br>
      <br>
      <?php if(isset($_SESSION['tno']))
     {
     echo "<a class='btn btn-warning' href='beveragemenu.php'>Go To Beverage Menu</a>";
     }
     ?></div>
  </div>
</div>

      </div>
    </div>
    <br><br>
    <footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">NPM RESTAURANT
    <a href=""> | npmfood@gmail.com | @npmfoods</a>
  </div>
</footer>
</body>
</html>
    
     
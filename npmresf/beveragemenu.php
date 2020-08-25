<?php 
session_start();
?>

<!DOCTYPE html>
   <html>
   <head>
   <title>NPM RESTAURANT</title>
   <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/foodmenu.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index.php">NPM RESTAURANT</a>
    
          <ul class="nav navbar-nav navbar-right">
 
     
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer.php">Place Order</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Admin</a>
      </li>
      
      <li class="nav-item active" active>
      <a class="nav-link" style="margin-left:60vw" href="">  
      <?php if(isset($_SESSION['tno']))
{ echo "Table no ".$_SESSION['tno']; } ?></a></li>
    </ul>
    <ul style="margin-right:1vw;" class="nav navbar-nav navbar-right">
    <?php 
            if(isset($_SESSION['tno']))
{ 
  echo "<li class='nav-item active'>";
  echo "<a class='nav-link' href='bill.php'>My Orders</a>";
  echo "</li>";
  } ?>
</ul>
  </div>
  </nav>

<div class="container">
<div class="contact-title">
        <h1 class="display-1">Beverages Menu</h1>
</div>
<div class="row">

  <div class="col mb-4">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/shakes.jpeg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay">Jar Shakes >></div>
    </div>
    <div class="flip-card-back">
    <br>
      <br>
      <a class="btn btn-warning" href="jarshakes.php">JarShakes Menu</a>
    </div>
  </div>
</div>
</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="col mb-4">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/mojitos.jpeg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay">Mojitos >></div>
    </div>
    <div class="flip-card-back">
    <br>
      <br>
      <a class="btn btn-warning" href="mojitos.php">Mojitos Menu</a>
    </div>
  </div>
</div>
</div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="col mb-4">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/tea.jpg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay">Indian Tea >></div>
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <a class="btn btn-warning" href="tea.php">IndianTea Menu</a>
    </div>
  </div>
</div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="col mb-4">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/coffee.jpg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay">Classic coffee >></div>
    </div>
    <div class="flip-card-back">
    <br>
      <br>
      <a class="btn btn-warning" href="coffee.php">Classic Coffee Menu</a>
    </div>
  </div>
</div>
<div>

<br>
</diV>
<br>


</body>
</html>
<?php 
session_start();
?>
<!DOCTYPE html>
   <html>
   <head>
   <title>NPM RESTAURANT</title>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navbar"
            aria-expanded="false"
            aria-controls="navbar"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NPM RESTAURANT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="foodmenu.php">Food Menu</a></li>
            <li><a href="beveragemenu.php">Beverage Menu</a></li>
            <li><a href="login.php">Admin</a></li>
            <?php 
            if(isset($_SESSION['tno']))
{ 
  echo "<li>";
  echo "<a href='bill.php'>My Orders</a>";
  echo "</li>";
  } ?>  
         <li class="nav-item active" active>
      <a class="nav-link" style="margin-left:0vw" href="">  
      <?php if(isset($_SESSION['tno']))
{ echo "Table no ".$_SESSION['tno']; } ?></a></li>  
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br>
<?php
  $db="npm_res";
  $conn = new mysqli("localhost","root","","npm_res");
  $conn ->select_db($db) or die( "Unable to select database");
  $res=mysqli_query($conn,"Select * from menulist where category='Pancakes'");
?>
<div class="container">
<div class="row justify-content-center">

  <table class="table">
  <thead class="thead" style="background-color: #dcedc8;">
  <tr>
<th scope="col">mid</th>
<th scope="col">Dishname</th>
<th scope="col">Price</th>
<th scope="col">Description</th>
<th scope="col">Quantity</th>
<th scope="col">Place Order</th>

  </tr>
  </thead>
  <?php
//loop through $result->fetch_assoc() $row variable i.e array having above details.
while($row = $res->fetch_assoc()): ?>

<tr>

<td>
<?php echo $row['mid']; ?>
</td>

<td>
<?php echo $row['dishname'];
?>
</td>

<td>
<?php echo $row['price']; ?>
</td>

<td>
<?php echo $row['description']; ?>
</td>

<td>

<input type="text" class="qty" name="quantity" value=""></input>

</td>
<td><input type="button" name="<?php echo $row['category'] ?>" onclick="fun()" id="<?php echo $row['dishname'] ?>" value="SERVE" class="btn btn-warning common">

</td>
</tr>
 <?php endwhile; ?>
</table>

</div>
</div>
<script src="js/dish.js"></script>
</body>
</html>




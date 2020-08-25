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
<?php require_once 'process.php'; ?>

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
            <li><a href="index.php">Logout</a></li>
            <li><a href="adminorders.php">Customer-Orders</a></li>
           
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br>

<div class="container">



<div class="wrapper">

<div class="row">
<h1>Admin Area</h1>
<form method="post" action="process.php">

 <input class="form-control" type="text" placeholder="ENTER MENU ID" name='mid' required value="<?php /*if(isset($_POST['mid']))*/echo $mid; ?>"><br>
<input class="form-control" type="text" placeholder="ENTER CATEGORY" name='category' required value="<?php echo $category; ?>"><br>
    <input class="form-control" type="text" placeholder="ENTER DISHNAME" name='dishname'required value="<?php echo $dishname; ?>"><br>
    <input class="form-control" type="text" placeholder="PRICE" name='price'required value="<?php /*if(isset($_POST['price'])){*/echo $price; ?>"><br>
    <input class="form-control" type="text" placeholder="DESCRIPTION" name='description'required value="<?php echo $description; ?>"><br>
    <?php 
    if($update == true):
?>
<input type="submit" value="Save" class="btn btn-primary" name="update" >
    <?php else: ?>
      <input type="submit" value="Add to Menu" class="btn btn-primary" name="add">
    <?php endif; ?>
</form>

</div>
</div>
</div>
<br>

<?php
  
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);

$conn ->select_db($db) or die( "Unable to select database");
$result = $conn->query("SELECT * FROM menulist") or die($conn->error);
?>
<div class="container">
<div class="row justify-content-center">
  <table class="table">
  <thead class="thead" style="background-color: #dcedc8;">
  <tr>
<th scope="col">mid</th>
<th scope="col">Category</th>
<th scope="col">Dishname</th>
<th scope="col">Price</th>
<th scope="col">Description</th>
<th colspan="2">Edit/Dlt</th>

  </tr>
  </thead>
  
<?php
//loop through $result->fetch_assoc() $row variable i.e array having above details.
while($row = $result->fetch_assoc()): ?>

<tr>
<td><?php echo $row['mid']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['dishname']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['description']; ?></td>

<td>
<a href="menu.php?edit=<?php echo $row['mid']; ?>"
class="btn btn-warning">Edit</a>
<a href="process.php?delete=<?php echo $row['mid']; ?>"
class="btn btn-danger">Delete</a>
<td>
</tr>
 <?php endwhile; ?>
</table>
</div>
</div>

<br>
<footer class="page-footer font-small blue">

  <div class="footer-copyright text-center py-3">NPM RESTAURANT
    <a href=""> | npmfood@gmail.com | @npmfoods</a>
  </div>
</footer>
</body>
</html>
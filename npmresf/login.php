<?php
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");

if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password1=$_POST['password'];
    $sql="Select * from users where username='$uname' and password='$password1'";
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['password']."<br>";        
    }

       
    if(isset($_POST['username'])&&(mysqli_num_rows($result)==1))
    {
        header('location:menu.php');
        echo "You have successfully logged in";
        //exit();
    }
    else
    {
        echo $uname;
        echo "You have entered incorrect password";
       // exit();
    }
   // $sql1="insert into users values(2,'$uname','$password1') ";
  //  $ab=mysqli_query($conn,$sql1);
        
}
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/login.css">
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
            
            <li><a href="customer.php">Place Order</a></li>
            
            <li><a href="login.php">Admin</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
<br><br><br>
    <div class="container">
        <div class="wrapper">

    <form action="" method="POST" style="border: 1px solid blue; padding: 50px;">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="username" placeholder='Enter username' required><br><br>
</div>
<div class="form-group" required>
            <label>Password</label>
            <input class="form-control" type="password"
          name="password" placeholder='Enter password' required><br><br>
           
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="Submit" ></input>
</div>
</form>

</div>
</div>

</body>
</html>

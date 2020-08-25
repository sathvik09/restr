
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
    </style>
  </head>

  <body>


?>
    <div class="sidenav">
      <div class="bill1">
        <h2>
        &nbsp;&nbsp; NPM  &nbsp;&nbsp;RESTAURANT<br />
          
        </h2>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;ADMIN AREA</p>
        <div class="a">
      <a type="submit" class="btn btn-black" href="adminorders.php">View All</a>
            <a type="submit" class="btn btn-black" href="tableorder.php">Delete</a>
      </div>
     
      </div>
      </div>
</div>

    <div class="main">
      <div class="col-md-6 col-sm-12">
        <div class="bill2">
        

   <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"):
        $host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);
$conn ->select_db($db) or die( "Unable to select database");
$bill=0;
$table_no=$_POST["table_no"];
$res=mysqli_query($conn,"Select quantity,dishname from customer_order where table_no=$table_no"); ?>
   <h1 class="display-1">Table: <?php echo $table_no; ?> </h1>

   </form>
<?php
   while($row = mysqli_fetch_assoc($res)):
    $rdish=$row['dishname']; 
    $res1=mysqli_query($conn,"Select * from menulist where dishname='$rdish'");
    // echo $row['category'];
    $row2=mysqli_fetch_assoc($res1);
    $q=$row['quantity']; 
  
?>
<ul class="list-group list-group-flush">
 
<li class="list-group-item">
<?php 

    $prep2 = "<span class='d-flex justify-content-end'>";
    $append2 = "</span>";
  echo $row['dishname'];
   echo $prep2.$row['quantity'];
   echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   echo $row2['price'].$append2;
 ?> 
  </li>
 
</ul>
<?php  
     $bill=$bill+($q*$row2['price']); ?>
     <?php endwhile; ?>
    
     <ul class="list-group list-group-flush">
     <li class="list-group-item list-group-item-secondary d-flex justify-content-end"><?php echo "Rs. ".$bill; ?></li>
</ul>
 
   
    <?php endif; ?>
    </div>
   </div>
   </div>
   </body>
   </html>
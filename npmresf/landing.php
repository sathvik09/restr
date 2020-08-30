<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" href="./css/foodmenu.css">
    <title>Document</title>
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

    /* @media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
    }
    
               <input type="submit" name = "s1" value="register">
               <input type="submit" name = "s2" value="check us out">
               <input type="submit" name = "s3" value="free">
            </form>
    } */
    
</style>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="">GOURMET</a>
    
          <ul class="nav navbar-nav navbar-right" style="margin-left:50vw;">
 
     
      <li class="nav-item">
        <a class="nav-link" href="">Dine-In</a>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item ">
        <a class="nav-link" href="">Reservation</a>
      </li>

      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="">FastFood/Takeaway</a>
      </li>
      
      &nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="">Food Freelancers</a>
      </li>
      
      &nbsp;&nbsp;&nbsp;&nbsp;
      </nav>
    <br><br><br><br><br><br><br><br><br>
    <form action="./landing/res_list.php" method='POST'>
      <div class="row">
      <div class="col mb-4 column" style="margin-left:3vw;">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/dinein.jpg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay"></div>
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <input type='submit' class="btn btn-warning" name ="s1" value="dine_in" />
    
    </div>
  </div>
</div>
  </div>

  <div class="col mb-4 column">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/reservation.jpg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay"></div>
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <input type='submit' class="btn btn-warning" name ="s3" value="Reserve" />
    
    </div>
  </div>
</div>
  </div>

  <div class="col mb-4 column">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/fastfood.png" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay"></div>
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <input type='submit' class="btn btn-warning" name ="s2" value="fast_food" />
    
    </div>
  </div>
</div>
  </div>

  <div class="col mb-4 column">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/foodfreelancers.jpeg" alt="Avatar" style="width:300px;height:300px;">
      <div class="overlay"></div>
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <a class="btn btn-warning" name ="mexican" href="mexican.php">Food Freelancers</a>
    
    </div>
  </div>
</div>
  </div>

</div>
</div>

</form>
<div style="margin-left:85vw;margin-top:2vw;">
    
<a class="btn btn-primary" href="./landing/index.php">Go to home page</a>
</div>
</body>
</html>
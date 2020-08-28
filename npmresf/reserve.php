<?php
  $host='localhost';
  $user='root';
  $password='';
  $db='npm_res';
  
  $conn = new mysqli($host, $user, $password,$db);
  
  $conn ->select_db($db) or die( "Unable to select database");

  $value = '';
  if(isset($_POST['value']))
  {
      echo "dsa";
      $value = $_POST['value'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/mbr.css">
</head>
<body>
<section class="form1 cid-qBkVg0iHhb mbr-parallax-background" id="form1-33" data-rv-view="1296">

    

    
    <div class="container">
        
        <h2 class="mbr-section-title align-center mbr-bold mbr-fonts-style display-2">Book Your Table:  <?php echo $value; ?></h2>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="text-block mbr-white">
                    <h2 class="mbr-fonts-style pb-3 time-block-title display-2">Open</h2>
                    <div class="time-block">
                        <h3 class="mbr-fonts-style time-title display-5">Monday - Friday</h3>
                        <ul class="mbr-fonts-style work-list display-7">
                            <li>7am - 11am (Breakfast)</li>
                            <li>11am - 10pm (Lunch/Dinner)</li>
                        </ul>
                    </div>
                    <div class="time-block">
                        <h3 class="mbr-fonts-style time-title display-5">Saturday - Sunday</h3>
                        <ul class="mbr-fonts-style work-list display-7">
                            <li>8am - 1pm (Brunch)</li>
                            <li>1pm - 9pm (Lunch/Dinner)</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="form-1 col-lg-8 col-md-6">
                <div data-form-alert="" hidden="">Thanks for filling out the form!
                </div>
                <form class="mbr-form" action="admin_reserve.php" method="post" ><input type="hidden" data-form-email="true" >
                                  <div class="row input-main">
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="firstname">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-firstname">First Name</label>
                            <input type="text" class="field display-7" name="firstname" data-form-field="First Name" required="" id="firstname-form1-33">
                        </div>
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="lastname">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-lastname">Last Name</label>
                            <input type="text" class="field display-7" name="lastname" data-form-field="Last Name" required="" id="lastname-form1-33">
                        </div>
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="date">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-date">Date</label>
                            <input type="date" class="field display-7" name="date" data-form-field="Date" required="" id="date-form1-33">
                        </div>
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="time">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-time">Time</label>
                            <input type="time" class="field display-7" name="time" data-form-field="Time" required="" id="time-form1-33">
                        </div>
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="party">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-phone">Party Size</label>
                            <input type="text" class="field display-7" name="party" data-form-field="Party" required="" id="party-form1-33">
                        </div>
                        <div class="col-lg-6 col-md-12 input-wrap" data-for="phone">
                            <label class="form-label-outside mbr-fonts-style display-7" for="form-1-phone">Phone</label>
                            <input type="text" class="field display-7" name="phone" data-form-field="Phone" required="" id="phone-form1-33">
                        </div>
                        
                    </div>
                    <div class="row input-main">
                        <div class="col-md-12 btn-row">
                            <span class="input-group-btn">
                                <button class='btn-sub' href="" type="submit" name='value' value='<?php echo $value?>' class="btn btn-form btn-secondary display-4">Send</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            let x = document.querySelector('.btn-subb');

            x.addEventListener('click',()=>{
                alert("Thanks for submiitting")
            })
        </script>
   </div>
</section>
</body>
</html>
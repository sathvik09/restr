<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>landing</title>
      <link rel="stylesheet" href="./main.css?version=23">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body onload="workItt">
<div id="loader"><div id="loader2"></div></div>
<div class= "animateBottom" id="whenDone" style="width:100vw;">
<div class="hero-back">
            <img style="width: 20%;height:10vh;" src="../pics/gourmet.png" alt="">
      </div>
      <div class="content">
            <form action="res_list.php" method='POST'>
               <input type="submit" name = "s1" value="dine_in">
               <input type="submit" name = "s2" value="fast_food">
               <input type="submit" name = "s3" value="free">
            </form>
       </div>
</div>
       <script>
var camelCase;
var loaders= document.getElementById("loader");
var content= document.getElementById("whenDone");
function workItt(){
    camelCase = setTimeout(showPage, 3000);
  console.log("this works");

}
function showPage(){
  loaders.style.display= "none";
  whenDone.style.display= "block";
  console.log("It worked! Yay");
}
workItt();
showPage();
</script>

      <script type="text/javascript">

      $(window).scroll(function() {
            var scrollPos = $(this).scrollTop();
            $(".hero-back").css({
                  'background-size' : 100 + scrollPos + '%'      
            });
      });

    </script>

</body>
</html>
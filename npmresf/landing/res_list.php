<?php
$host='localhost';
$user='root';
$password='';
$db='npm_res';

$conn = new mysqli($host, $user, $password,$db);

$conn ->select_db($db) or die( "Unable to select database");

  $value = '';
  $isTrue = false;
   if(isset($_POST['s1'])){
       $value = $_POST['s1'];
   }
   elseif(isset($_POST['s2'])){
    $value = $_POST['s2'];
   }
   elseif(isset($_POST['s3'])){
    $value = 'dine_in';
    $isTrue = true;
   }

   $sql = "SELECT `name`,`numCus`,`totalCus` FROM restr WHERE `type`='$value'";  
   $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE h4tml>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/res_list.css?version=92">
</head>
<body>
    <div class="body">
    <table class="table">
        <tr>
        <th class='heading'><?php echo $value ?></th>  
        </tr>
       <?php
       
       if($isTrue){
          foreach($result as $row)
          {
              $color = '';
              if($row['numCus']<=5)
              {
                  $color = 'green';
              }
              elseif($row['numCus']<8)
              {
                $color = 'yellow';
              }
              elseif($row['numCus']>=8)
              {
                $color = 'red';
              }

              echo "<tr class='entries'>
                      <form method = 'POST' action='../reserve.php'>
                      <td class='$color'><button  type='submit' name = 'value' value='$row[name]'>$row[name]</button></td>
                      </form>
                    </tr>";
          }
        }
        else{
          foreach($result as $row)
          {
              $color = '';
              if($row['numCus']<=5)
              {
                  $color = 'green';
              }
              elseif($row['numCus']<8)
              {
                $color = 'yellow';
              }
              elseif($row['numCus']>=8)
              {
                $color = 'red';
              }

              echo "<tr class='entries'>
                      <td><button class='$color' type='button' name = 'value' value='$row[name]'>$row[name]</button></td>
                    </tr>";
          }
        }
       ?>
          
    </table>
    
    </div>
</body>
</html>


<?php
  session_start();
  $servername = "localhost";
$username = "root";
$password = "";
$database = "npm_res";

$conn = new mysqli($servername, $username, $password,$database);
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn ->select_db($database) or die( "Unable to select database");

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $category = mysqli_real_escape_string($conn, $data[0]);
    $dishname = mysqli_real_escape_string($conn, $data[1]);  
    $price = mysqli_real_escape_string($conn, $data[2]);
    $description = mysqli_real_escape_string($conn, $data[3]);
    $mid = mysqli_real_escape_string($conn, $data[4]);
    
    $query = "insert into menulist values('$category','$dishname','$price','$description','$mid')";
    mysqli_query($conn, $query);
   }
   fclose($handle);
   header("location: csvf.php");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

?>
<form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
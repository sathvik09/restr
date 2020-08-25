<?php
   $json = file_get_contents("php://input");
   $data = json_decode($json,true);

   $result[] = array("name"=>$data["name"],"qt"=>$data["quantity"]);
   echo json_encode($result);
?>
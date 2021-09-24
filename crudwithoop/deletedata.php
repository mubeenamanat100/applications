<?php 

  require "database.php";
  $personid = $_POST['personid'] ?? NULL;
  
  $dbobject = new database();

  $dbobject->delete("user_info"," $personid");

  echo "record deleted";
 
 ?>
<?php 

    require "database.php";

  $personid = $_POST['personid'] ?? NULL;
  $address = $_POST['address'] ?? NULL;
  $fullname = $_POST['fullname'] ?? NULL;
  $city = $_POST['city'] ?? NULL;
  $phonenumber = $_POST['phonenumber'] ?? NULL;
  
  
  $dbobject = new database();

  $dbobject->insert("user_info",['personid'=>$personid,'address'=>$address, 'fullname'=>$fullname , 'city'=>$city,'phonenumber'=>$phonenumber]);

//   $dbobject->getresult();

  

 
 ?>
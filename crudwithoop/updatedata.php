<?php 

require "database.php";

$personid = $_POST['personid'] ?? NULL;
$address = $_POST['address'] ?? NULL;
$fullname = $_POST['fullname'] ?? NULL;
$city = $_POST['city'] ?? NULL;
$phonenumber = $_POST['phonenumber'] ?? NULL;

echo $personid;

$dbobject = new database();

$dbobject->update("user_info",$personid, ['address'=>$address, 'fullname'=>$fullname , 'city'=>$city,'phonenumber'=>$phonenumber]);

 
 ?>
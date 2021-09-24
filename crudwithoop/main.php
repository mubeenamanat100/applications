<?php 

include "database.php";

$obj = new database();

//  $obj->update("user_info","personid='1'",["personid"=>"1","fullname"=>"mubeenamanat","address"=>"st 3 lahore","phonenumber"=>"032202020111"]);
 $obj->delete("user_info","1");

 ?>

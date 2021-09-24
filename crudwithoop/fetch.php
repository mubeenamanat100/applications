<?php 

require "database.php";

    if(isset($_POST['personid'])){
        
        $personid = $_POST['personid'];
        
        $dbobject = new database();

            $dbobject->read("select * from ","user_info"," personid='$personid'");

            $resultArray = $dbobject->getresult();

            
            if(count($resultArray) == 1){
                foreach ($resultArray as $value) {
                   echo json_encode($value);
                }
            }
            
            // echo 

    }

    

  
 
 ?>

<?php 

     require "database.php";

     $dbObject = new database();

     $dbObject->read("select * from ","user_info",null);
    
     $resultArray = $dbObject->getresult();

     $output = "";

    foreach ($resultArray as list("personid" => $personid , "fullname" => $fullname , "address" => $address , "city"=>$city , "phonenumber" => $phonenumber)) {
            $output .= "<tr> <td>$personid</td> <td> $fullname </td> <td> $address </td> <td> $city </td> <td> $phonenumber </td> </tr>";
    }

    // $output .= "</tr>";

    echo $output;
 
 ?>
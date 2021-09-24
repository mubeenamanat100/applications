<?php 


    $servername="localhost";
    $dbname = "dbname=crud";
    $username ="root";
    $password="";

    $serveraddress= "mysql:host=$servername;$dbname";

    $conn = new PDO($serveraddress,$username,$password);
  
    $sql =  $conn->prepare("SELECT * FROM user_info");

    $sql->execute();

    $output = "";
    while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        // $index=0;
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";

        $output = "
        <tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>{$row['age']}</td>
        <td>{$row['phonenumber']}</td>
        <td>{$row['moidef']}</td>
        <td class={'d-flex justify-content-center'}>
        <button class='btn btn-sucess mr-1 ml-1 update-btn' data-id='{$row['id']}'>Update</button>
        <button class='btn btn-danger mr-1 ml-1 delete-btn' data-id='{$row['id']}'>Delete</button>
        </td>
        </tr>
        ";
        
        echo $output;
    }
 
 ?>
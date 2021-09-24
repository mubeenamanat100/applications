<?php 


if(isset($_POST['userid']))
{
            $userid = $_POST['userid'];
           


            $servername="localhost";
            $dbname = "dbname=crud";
            $username ="root";
            $password="";

            $serveraddress= "mysql:host=$servername;$dbname";

            $conn = new PDO($serveraddress,$username,$password) or die("connection not established");
    
  

            $sql = $conn->prepare("SELECT * FROM user_info where id='$userid'");
            $sql->execute();
            $row = $sql->fetch(PDO::FETCH_ASSOC);

            echo json_encode($row);
                
            


}
 
 
 ?>
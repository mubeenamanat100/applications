<?php 

if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['contactnumber']) && isset($_POST['moidf']) && isset($_POST['mode']))
{
            $name = $_POST['name'];
            $age = $_POST['age'];
            $contactnumber = $_POST['contactnumber'];
            $moidf = $_POST['moidf'];
            $mode = $_POST['mode'];


            $servername="localhost";
            $dbname = "dbname=crud";
            $username ="root";
            $password="";

            $serveraddress= "mysql:host=$servername;$dbname";

            $conn = new PDO($serveraddress,$username,$password) or die("connection not established");
    
  

            $sql = $conn->prepare("INSERT INTO user_info (username,age,phonenumber,moidef) VALUES ('$name','$age','$contactnumber','$moidf')");

            if($sql->execute()){
                echo "200";
            }
                    
    
 


}
 
 
 ?>
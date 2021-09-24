<?php 

    if(isset($_POST['passcode']) && isset($_POST['email'])){

            $passcode = $_POST['passcode'];
            $email  = $_POST['email'];

            $servername= "localhost";
            $username="root";
            $dbpassword="";
            $serveraddress="mysql:host=$servername;dbname=crud";

            $conn = new PDO($serveraddress,$username,$dbpassword) or die("connection not established");
          
            if(checkDuplicateEmailExist($email,$conn)){
              // echo "email already exists";
           }
           else{
            
            $sqlQuery = $conn->prepare("INSERT INTO credentials (email, passcode) VALUES ('$email','$passcode')");
            $sqlQuery->execute();

            echo "account created successfully";
           }
            



    }

    function checkDuplicateEmailExist($email,$connection){

        // $conn = new PDO($serveraddress,$username,$dbpassword) or die("connection not established");
        $sql = $connection->prepare("select email from credentials where email='$email'");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result)){
            echo "emailIsSame";

            return true;
        }
    }
?>
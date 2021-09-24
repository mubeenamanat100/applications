<?php 


if(isset($_POST["email"]) && isset($_POST["password"])){
        // die("die");
        $email = $_POST["email"];
        $password = $_POST["password"];

        $servername="localhost";
        $username="root";
        $dbpassword="";

        
            $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $dbpassword) or die("connection not established");
            
            $sql = $conn->prepare("SELECT email , passcode FROM CREDENTIALS where email='$email' and passcode='$password'");

            
            $sql->execute();

            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            if(empty($results)){
                echo "wrongcredentials";
            }
            else{
                echo "loginsuccessfull";
                // header("Location: http://localhost/phpprogramming/applications/crud/mainpage.php");
                // exit();
            }
            // $json = json_encode($results);


            // echo $json;
            
            
            



           
   

}else{
    echo "204";
}

// server connection


?>
            
<?php 

if(isset($_POST['userid'])

){
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $usercontact=$_POST['usercontact'];
    $moidef = $_POST['moidef'];

        $servername="localhost";
        $dbname = "dbname=crud";
        $dbusername ="root";
        $password="";

        $serveraddress= "mysql:host=$servername;$dbname";

        $conn = new PDO($serveraddress,$dbusername,$password) or die("connection not established");



        $sql = $conn->prepare("UPDATE user_info SET username='$username', age='$age', phonenumber='$usercontact', moidef='$moidef' where id='$userid'");
        
        if($sql->execute()){
            echo "data updated";

        }else{
            echo "some error";
        }
        // $row = $sql->fetch(PDO::FETCH_ASSOC);

        // echo json_encode($row);

}
           



 
 ?>  
            
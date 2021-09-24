
<?php 

if(isset($_POST['deleteId'])){

    $deleteId = $_POST['deleteId'];


  $servername = "localhost";
  $dbname = "dbname=crud";
  $username="root";
  $password="";

  $connectionString = "mysql:host=$servername;$dbname";
  $conn = new PDO($connectionString,$username,$password) or die("connection unsuccessfull");

  $sql = $conn->prepare("delete from user_info where id=$deleteId");

  

  if($sql->execute()){
      echo "record has been deleted";
  }
  

}
 ?>
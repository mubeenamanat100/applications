<?php

class database{

    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "crudwithoop";


    private $mysqli = "";
    private $conn = false;
    private $result = array();
    public function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host,$this->db_username,$this->db_password,$this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result, $this->mysqli->connect_error);
            }
        }
    }

    public function insert($table_name, $params=array()){

        $columnValues = implode(", ", array_keys($params));
        $dataValues = implode("', '", array_values($params));
        if($this->ifTableExists($table_name)){

            $sql = "insert into $table_name ($columnValues) VALUES ('$dataValues')";
            $this->mysqli->query($sql);

        }

    }

    public function update($table_name, $id, $params=array()){

        $dataValues = array();
        // echo "<pre>"; print_r($params);die();
        foreach ($params as $key => $value) {

            $dataValues[] = "$key = '$value'";
        

        }

        $dataValueimplodedString = implode(", ",$dataValues);

        if($this->ifTableExists($table_name)){

           echo $sql= "update user_info set " . $dataValueimplodedString . " where personid= $id";

            $this->mysqli->query($sql);
        }
    }

    public function delete($table_name,$condition){
        if($this->ifTableExists($table_name)){

           echo $sql = "DELETE from $table_name where personid='$condition'";

            $this->mysqli->query($sql);

            return true;
        }else
        {
            return false;
        }
            
           
    }
    public function read($sql = "select * from " , $table_name , $where = NULL ){

        if($this->ifTableExists($table_name)){
            $sql .= $table_name;
            
        
            if($where!=null){
                $sql .= " WHERE $where";
            }

        }
        // echo $sql;
        
        $resultarray = $this->mysqli->query($sql);
        // print_r($resultarray);
         $this->result = $resultarray->fetch_all(MYSQLI_ASSOC);
        
         
        


    }


    private function  ifTableExists($table_name){

        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table_name'";
        $tableinDb = $this->mysqli->query($sql);
        if($tableinDb){
            return true;
        }else{
            array_push($this->result,$table_name . " does not exist in the database ");
            return false;
        }


    }

    public function getresult(){
        return $this->result;
    }
    

    public function __destruct(){
        if($this->conn){

            $this->mysqli->close();
            $this->conn =false;

            return true;
        }else{
            return false;
        }
    }
}
    



?>
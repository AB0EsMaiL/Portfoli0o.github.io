<?php
    $conn = mysqli_connect('localhost','root','','test');
      
    if (isset($_POST['registerBtn'])){ 
        // get all of the form data 
    
    $username = $_POST['username']; 
    $email = $_POST['email']; 
    $passwd = $_POST['password']; 
    $phoneNumber = $_POST['phone'];
    $sqlInsert  = "INSERT INTO users (username,password,email,phoneNumber) 
    VALUES ('{$username}', '{$passwd}','{$email}', '{$phoneNumber}')";
 
    // mysqli_query is used to performa query against the db it takes 2 params : connection and the query  
    $result = mysqli_query($conn,$sqlInsert);
    
    ?>
    <?php

class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "portdb",
        $tablename = "signup",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->conn = mysqli_connect($servername, $username, $password,$dbname);

        // Check connection
        if (!$this->conn){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->conn, $sql)){

            $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        }
    }
}
?>
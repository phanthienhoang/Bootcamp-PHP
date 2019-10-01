<?php
class DBconnection
{
    private $servername='127.0.0.1';
    private $dbname='libary';
    private $username='root';
    private $password='';
  
public function connect()
{
    $conn=new PDO("mysql:host=$this->servername;dbname=$this->dbname", "$this->username", "$this->password");
    return $conn;
}
  // public function connect()
    // {
    //     $conn=new PDO("mysql:host=$this->servername;dbName=$this->dbname", "$this->username", "$this->password");
    //     return $conn;
    // }
}
// $db = new DBconnection();
// $conn = $db->connect();
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// var_dump($conn);

// $studen_number = "M01";
// $studen_name = "hoang";
// $address = "28 nguyen tri phuong";
// $email = "phanthienhoang95@gmail.com";
// $stmt= $conn->prepare("INSERT INTO students (studen_number,studen_name,address,email)
// VALUES ('$studen_number', '$studen_name', '$address','$email')");
// $stmt->execute();
$db = new  DBconnection();
$conn = $db->connect();
var_dump($conn);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$studen_number = "M06661";
$studen_name = "hoang";
$address = "28 nguyen tri phuong";
$email = "phanthienhoang95@gmail.com";
$stmt = $conn->prepare("INSERT INTO students (studen_number,studen_name,address,email) 
VALUES ('$studen_number', '$studen_name', '$address','$email')");
$stmt->execute();
?>
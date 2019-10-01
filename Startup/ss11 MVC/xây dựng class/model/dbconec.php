<?php
    class dataConnet
    {
        private $username = "root"; // Khai báo username
        private $password = "";      // Khai báo password
        private $server   = "127.0.0.1";   // Khai báo server
        private $dbname   = "libary";      // Khai báo database
        public function connect()
        {
            $conn = new PDO("mysql:host=$this->server;dbName=$this->dbname","$this->username","$this->password");
            return $conn;
        }
    }
    $db = new dataConnet();
    $conn = $db->connect();
    var_dump($conn);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $studen_number = "M01";
    $studen_name = "hoang";
    $address = "28 nguyen tri phuong";
    $email = "phanthienhoang95@gmail.com";
    $stmt = $conn->prepare("INSERT INTO students (studen_number,studen_name,address,email) 
    VALUES ('$studen_number', '$studen_name', '$address','$email')");
    $stmt->execute();
?>
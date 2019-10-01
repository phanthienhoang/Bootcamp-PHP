<?php
    class DBconnection
    {
        private $servername='127.0.0.1';
        private $dbname='quan_ly_thu_vien';
        private $username='root';
        private $password='';
      
        public function connect()
        {
            $conn=new PDO("mysql:host=$this->servername;dbname=$this->dbname", "$this->username", "$this->password");
            return $conn;
        }
    }
    $db = new  DBconnection();
    $conn = $db->connect();
    $stmt = $conn->prepare("SELECT * FROM categories"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result =$stmt->fetchAll();

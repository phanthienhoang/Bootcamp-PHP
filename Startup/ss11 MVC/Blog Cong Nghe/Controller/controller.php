<?php
    namespace Controller;

    use Model\DBConnection;

    class controller
    {

        public $productDB;

        public function __construct()
        {
            $connection = new DBConnection("mysql:host=localhost;dbname=luyentap_php", "root", "");
            $this->productDB = new productDB($connection->connect());
        }
    }
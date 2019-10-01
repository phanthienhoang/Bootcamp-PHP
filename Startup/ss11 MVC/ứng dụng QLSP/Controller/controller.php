<?php
    namespace Controller;

    use Model\product;
    use Model\productDB;
    use Model\DBConnection;

    class controller
    {

        public $productDB;

        public function __construct()
        {
            $connection = new DBConnection("mysql:host=localhost;dbname=san_pham", "root", "");
            $this->productDB = new productDB($connection->connect());
        }

        public function add()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                include 'view/add.php';
            } else {
                $productID = $_POST['productID'];
                $productName = $_POST['productName'];
                $productLine = $_POST['productLine'];
                $productVendor = $_POST['productVendor'];
                $description = $_POST['Description'];
                $quantity = $_POST['quantity'];
                $buy = $_POST['buy'];

                $product = new product($productID, $productName, $productLine,$productVendor,$Description,$quantity,$buy);
                $this->productDB->create($product);
                $message = 'tạo mới thành công';
                include 'view/add.php';
            }
        }

        public function index()
        {
            $array = $this->productDB->getAll();
            include 'view/list.php';
        }

        public function delete()
        {
           
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $product = $this->productDB->get($id);
                include 'view/delete.php'; 
            } else {
                $id = $_POST['productID'];
                $this->productDB->delete($id);
                header('Location: index.php');
            }
        }

        public function edit()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = $_GET['id'];
                $product = $this->productDB->get($id);
                include 'view/edit.php';
                } else {
                    $id = $_POST['productID'];
                    $product = new product(
                        $_POST['productID'], 
                        $_POST['productName'], 
                        $_POST['productLine'],
                        $_POST['productVendor'],
                        $_POST['Description'],
                        $_POST['quantity'],
                        $_POST['buy']);
                    $this->productDB->update($id, $product);
                    header('Location: index.php');
                }
            }
    }
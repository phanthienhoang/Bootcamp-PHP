<?php
    namespace Model;

    class productDB
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($a)
        {
            $sql = "INSERT INTO product(productID,productName,productLine,productVendor,Description,quantity,buy) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $a->productID);
            $statement->bindParam(2, $a->productName);
            $statement->bindParam(3, $a->productLine);
            $statement->bindParam(4, $a->productVendor);
            $statement->bindParam(5, $a->Description);
            $statement->bindParam(6, $a->quantity);
            $statement->bindParam(7, $a->buy);
                return $statement->execute();
        }
        public function getAll()
        {
            $sql = "SELECT * FROM product";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll();
            $array = [];
            foreach ($result as $row){
                $product = new product($row['productID'],$row['productName'],$row['productLine'],$row['productVendor'],$row['Description'],$row['quantity'],$row['buy']);
                $array[] = $product;
            }
            return $array;
        }

        public function get($id)
            {
                $sql = "SELECT * FROM product WHERE productID = ?";
                $statement = $this->connection->prepare($sql);
                $statement->bindParam(1, $id);
                $statement->execute();
                $row = $statement->fetch();
                $product = new product($row['productID'],$row['productName'],$row['productLine'],$row['productVendor'],$row['Description'],$row['quantity'],$row['buy']);
                $product->productID = $row['productID'];
                return $product;
            }
          
        public function delete($id)
        {
            $sql = "DELETE FROM product WHERE productID = ?";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $id);
            $statement->execute();
        }

        public function update($id, $product){
            $sql = "UPDATE product SET productID = ?, productName = ?, productLine = ?, productVendor = ?, Description = ?, quantity = ?, buy = ? WHERE productID = ?";
            // var_dump($product);
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(1, $product->productID);
            $statement->bindParam(2, $product->productName);
            $statement->bindParam(3, $product->productLine);
            $statement->bindParam(4, $product->productVendor);
            $statement->bindParam(5, $product->Description);
            $statement->bindParam(6, $product->quantity);
            $statement->bindParam(7, $product->buy);
            $statement->bindParam(8, $id);
            return $statement->execute();
          }
    }
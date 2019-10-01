<?php
    namespace Model;
    class product
    {
        public $productID;
        public $productName;
        public $productLine;
        public $productVendor;
        public $Description;
        public $quantity;
        public $buy;

        public function __construct($productID, $productName, $productLine,$productVendor,$Description,$quantity,$buy)
        {
            $this->productID = $productID;
            $this->productName = $productName;
            $this->productLine = $productLine;
            $this->productVendor = $productVendor;
            $this->Description = $Description;
            $this->quantity = $quantity;
            $this->buy = $buy;
        }
    }
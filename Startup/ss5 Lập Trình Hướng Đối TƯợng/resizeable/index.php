<?php
    interface Colorable
    {
        public function howtoColor();
    }   
    interface Resizeable
    {
        public function resize($number);
    }
    class Shape{
        public $name;
    
        public function __construct($name)
        {
            $this->name = $name;
        }
    
        public function show(){
            return "I am a shape. My name is $this->name";
        }
    }
    class Circle extends Shape {
        public $radius;
        public function resize($number)
        {
            $this->radius += $this->radius*$number;
        }
       
        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }
       
        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
       
        public function calculatePerimeter(){
            return pi() * $this->radius * 2;
        }
    }
    class Cylinder extends Circle {
        public $height;
       
        public function __construct($name, $radius, $height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }
       
        public function calculateArea()
        {
            return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
        }
       
        public function calculateVolume(){
            return parent::calculateArea() * $this->height;
        }
    }
    class Rectangle extends Shape{
        public $width;
        public $height;
        public function resize($number)
        {
             $this->width += $this->width*$number;
             $this->height += $this->height*$number;
        }
       
        public function __construct($name, $width, $height)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }
       
        public function calculateArea(){
             return $this->height * $this->width;
        }
       
        public function calculatePerimeter(){
             return ($this->height + $this->width) * 2;
        }
    }
    class Square extends Rectangle implements Colorable{
       
        public function __construct($name, $width, $height)
        {
        parent::__construct($name, $width, $height);
        }
        public function resize($number)
        {
             $this->width += $this->width*$number;
             $this->height += $this->height*$number;
        }
        public function howtoColor()
        {
            return "Color all four sides";
        }
        
    }

    $square = new Square ("vuong",5,5);
    $rectangle = new Rectangle ("nhat",5,8);
    $circle = new Circle ("tron",8);
    

    $array = array($square,$rectangle,$circle);

    echo "trc khi resize: "."<br>";
    foreach($array as $value){
        echo $value->show()."<br>";
        foreach($value as $key=>$a){
            echo $key."=>".$a."<br>";
        }
    }
   

    echo "sau khi resize: "."<br>";
    foreach($array as $value){
        $value->resize(50/100);
        echo $value->show()."<br>";
        foreach($value as $key=>$a){
            echo $key."=>".$a."<br>";
        }
    }
    echo "<br>";
    foreach($array as $value){
        echo $value->show()."<br>";
        if($value instanceof Colorable ){
            echo $value->howtoColor();
        }
        
    }
?>
<?php
 class Shape {
    public $name;
    
    public function __construct($name)         
    {
        $this->name = $name;
    }
    public function show()
    {
        echo "I am a shape. My name is".$this->name;
    }
}
class Triangle extends Shape{
    private $side1;
    private $side2;
    private $side3;
    private $color;
    public function __construct($name, $side1 = 1, $side2 = 1, $side3 = 1, $color)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }
    public function getArea()
    {
        $p = ( $this->side1 +  $this->side2 +  $this->side3)/2;
        $s = sqrt($p*($p - $this->side1)*($p - $this->side2)*($p - $this->side3));
        return $s;
    }
    public function getPrimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString()
    {
        return "tam giac co mau ".$this->color.", co chu vi = ".$this->getPrimeter().", co dien tich = ".$this->getArea();
    }
}
include_once ('triangleclass.php');
 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
         class Circle
         {
            public function __construct($radius, $color)
            {
                 $this->radius = $radius;
                 $this->color = $color;
            }
           
            public function setRadius($radius)
            {
                $this->radius = $radius;
            }
            public function setColor($color)
            {
                $this->color = $color;
            }
            public function getRadius()
            {
                return $this->radius;
            }
            public function getColor()
            {
                return $this->color;
            }
            public function getAreaCircle()
            {
                return  "diện tích hình tròn là: ".$this->radius*$this->radius*3.14;
            }
            
         }
         class Cylinder extends Circle
         {
            public function __construct($radius, $color, $height)
            {
                parent ::__construct($radius, $color, $height);
                $this->height = $height;
            }
            public function getAreaCylinder()
            {
                return "diện tích xung quanh hình trụ là: ".$this->radius*$this->radius*3.14*$this->height;
            }
         }
         $circle = new Cylinder (3,"red",3);
         echo  $circle->getColor();
    ?>
</body>
</html>
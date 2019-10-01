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
    class Rectangle
    {
        public $width;
        public $height;
        
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        //tinh dien tich
        public function getArea()
        {
        return $this->width * $this->height;
        }

        //tinh chu vi
        public function getPerimeter()
        {
        return (($this->width + $this->height) * 2);
        }

        public function display()
        {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }
    $width  = 10;
    $height = 20;
    $rectangle = new Rectangle($width, $height);
    echo "chiều rộng là :".$rectangle->width; // 0utput: 10
    echo "chiều dài là: ".$rectangle->height; // 0utput: 20
    echo "<br>";
    $rectangle->height = 30;
    $rectangle->width = 20;

    echo $rectangle->height; // 0utput: 30
    echo $rectangle->width; // 0utput: 20
    echo "<br>";
    echo "chu vi hcn là: ".$rectangle->getPerimeter()."<br>"; // 0utput: 100
    echo "diện tích hình chữ nhật là: ".$rectangle->getArea()."<br>"; // Output: 600
    echo ("Your Rectangle". $rectangle->display());
    ?>
</body>
</html>
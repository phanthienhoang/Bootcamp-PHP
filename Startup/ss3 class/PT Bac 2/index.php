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
        class QuadraticEquation
        {
            private $a;
            private $b;
            private $c;

            public function __construct($_a,$_b,$_c)
            {
                $this->a = $_a;
                $this->b = $_b;
                $this->c = $_c;
            }
            public function getA()
            {
                return $this->a;
            }
            public function getB()
            {
                return $this->b;
            }
            public function getC()
            {
                return $this->c;
            }
            public function getDiscriminant()
            {
                return ($this->b*$this->b - 4*$this->a*$this->c); 
            }
            public function getResult()
            {       
                    $delta = ($this->b*$this->b - 4*$this->a*$this->c); 
                    if ( $delta> 0) {
                        $x1 = (- $this->b + sqrt ($delta )) / (2 * $this->a);
                        $x2 = (- $this->b - sqrt ( $delta )) / (2 * $this->a);
                        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
                    } else if ( $delta == 0) {
                        $x1 = (- $this->b / (2 * $this->a));
                        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
                    } else {
                        echo ("Phương trình vô nghiệm!");
                    }
                }
            }
        $ddd=new QuadraticEquation(3,-4,1);
        echo $ddd->getResult();
    ?>
</body>
</html>
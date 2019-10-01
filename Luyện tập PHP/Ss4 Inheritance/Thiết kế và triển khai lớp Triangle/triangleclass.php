<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>triangle</title>
</head>
<body>
   
    <?php 
        include_once ('index.php');
        function isTriangle($a, $b, $c)
        {
            if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                return true;
            } else 
                return false;
            
        }
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $color = $_POST["color"];
            $side1 = $_POST["side1"];
            $side2 = $_POST["side2"];
            $side3 = $_POST["side3"];
            if (isTriangle($side1, $side2, $side3)){
                $triangle1 = new Triangle($name, $side1, $side2, $side3,  $color);
                echo $triangle1->toString();
            } else echo "ba canh khong hop le!!!";
        }   
    ?>
 <form method="post">
<h2>Input Triangle</h2>
name:  <input type="text" name="name"><br><br>
color:  <input type="text" name="color"><br><br>
side1:  <input type="number" name="side1"><br><br>
side2:  <input type="number" name="side2"><br><br>
side3:  <input type="number" name="side3"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
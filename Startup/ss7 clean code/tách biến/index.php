<?php
    include "colorable.php";
    include "Resizeable.php";
    include "Shape.php";
    include "circle.php";
    include "cylinder.php";
    include "Rectangle.php";
    include "square.php";
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
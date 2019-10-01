<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Min</title>
</head>
<body>
    <?php
        function findMaxNumber($array){
             $max = $array[0];
             $arrlength = count($array);
             for($i=1; $i < $arrlength ; $i++) { 
                if($array[$i]>$max){
                    $max = $array[$i];
                }
                 
            }
            return $max;
        }
        $arr = array(3,3,5,2,4);
        echo findMaxNumber($arr);
    ?>
</body>
</html>
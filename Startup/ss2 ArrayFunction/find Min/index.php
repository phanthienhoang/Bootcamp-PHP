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
        $arr2 = array(12,14,15,16,17);  
        function finMin($arr){
            $min =$arr[0];
            for($i=0;$i<count($arr);$i++){
                if($min>$arr[$i]){
                    $min = $arr[$i];
                }
                return $min;
            }
        }
        echo finMin( $arr2)."<br>";
        foreach ($arr2 as $arr2){ 
            echo $arr2.', '; 
        }
    ?>
</body>
</html>
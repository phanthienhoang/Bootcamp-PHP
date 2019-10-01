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
        $isPrime = true;
        for ($i=2; $i <= 100; $i++) { 
            for ($j=2; $j < $i ; $j++) { 
                if ($i % $j === 0){
                    $isPrime = false;
                }
            }
            if ($isPrime){
                echo $i.", ";
            }
            $isPrime = true;
        }   
    ?>
</body>
</html>
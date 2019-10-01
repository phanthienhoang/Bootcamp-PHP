<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>In n so nguyen to</title>
</head>
<body>
    <h2>In n số nguyên tố</h2>
    <form method='POST'>
        <label>n=</label>
        <input type="text" name="input" placeholder="in bao nhiêu số nguyên tố ?"><br/><br/>
        <input type="submit" name="print" value='Print'>
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $input = (int)$_POST["input"];
        $print = $_POST["print"];
        $number = 0;
        $count = 0;
        function isPrime($n){
            if($n===1) return false;
            if($n===0) return false;
            for($i = 2; $i < $n; $i++){
                if ($n % $i === 0){
                    return false;
                }     
            }
            return true;
        }
        if($print){
            while ($count < $input){
                if (isPrime($number)){
                    echo $number." ,";
                    $number++;
                    $count++;
                }
                $number++;
            }
        }
    }
    ?>
</body>
</html>
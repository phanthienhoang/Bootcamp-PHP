<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method = "get">
    Name:<input type ="text" name="name" >
    <input type="submit" value="Create" name="aaa">
    </form>
    <?php
    $arrayClassFour = array("ái","hoàng","thành","rin");
    foreach($arrayClassFour as $key => $value ){
        echo "$value" . "<br>" ;
    }
    ?>
</body>
</html>
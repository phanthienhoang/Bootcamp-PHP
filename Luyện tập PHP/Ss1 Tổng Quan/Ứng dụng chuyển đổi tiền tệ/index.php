<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 200px;
            height: 200px;
            font-size: 30px;
            border: 5px solid #ccc; 
            padding: 12px 10px 12px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <h6>chuyển đổi tiền tệ</h6>
            <input type="text" name="money" placeholder ="nhập số USD">
            <input type="submit" value="VND">
        </form>

    </div>   
    <?php
        if($_POST) {
            $money = $_POST["money"];
            $result = $money *23000;
            echo '<h3>' . ''. $result . '</h3>';
        }
    ?>
</body>
</html>
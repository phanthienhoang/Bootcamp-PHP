<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body{
            margin:40px;
            background-color:#d8d7d2;
            font-size:14px;
            color:black;
        }
        .simple-login-container{
            width:600px;
            max-width:100%;
            margin:50px auto;
        }
        .simple-login-container h2{
            text-align:center;
            font-size:20px;
        }

        .simple-login-container .btn-login{
            background-color:#FF5964;
            color:#fff;
        }
        .a{
            color:#fff;
        }
        .error {
            color: #FF0000;
            text-align:center;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
<?php
    function loadRegistrations($filename){
        $jsondata = file_get_contents($filename);
        $arr_data = json_decode($jsondata, true);
        return $arr_data;
    }
    function saveDataJSON($filename, $name, $email, $phone){
        try {
            $contact = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone
            );
            $arr_data = loadRegistrations($filename);
            array_push($arr_data, $contact);
            $jsondata = json_encode($arr_data,JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsondata);
            echo "Lưu dữ liệu thành công";
        } catch (Exception $e){
            echo "lỗi: ", $e ->getMessage(), "\n";
        }
    }
    $nameErr = null;
    $emailErr = null;
    $phoneErr = null;
    $name = null;
    $email = null;
    $phone = null;
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $has_erro = false;
        if(empty($name)){
            $nameErr = "Name khong duoc de trong";
            $has_erro = true;
        }
        if(empty($email)){
            $emailErr = "Email khong duoc de trong";
            $has_erro = true;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "dinh dang email sai (xxx@xxx.xxx.xxx)!";
                $has_erro = true;
            }
        }
        if (empty($phone)){
            $phoneErr = "so dien thoai khong duoc de trong";
            $has_erro = true;
        }
        if ($has_erro === false){
            saveDataJSON("data.json", $name, $email, $phone);
            $name = null;
            $email = null;
            $phone = null;
        }
    }
?>
    <div class="simple-login-container">
        <h2>Đăng kí</h2>
        <form method ='POST'>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="text" class="form-control" name='name' placeholder="Your name">
            </div>
            <div class="error"><?php echo $nameErr; ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="email" placeholder="Enter your email"  name='email' class="form-control" >
            </div>
            <div class="error"><?php echo $emailErr ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="number" placeholder="Enter your phone" name='phone' class="form-control">
            </div>
            <div class="error"><?php echo $phoneErr ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
            <input type="submit" name="submit" value="Register">
            </div>
        </div>
        </form>
    </div>
    <?php
    $registrations = loadRegistrations('data.json');
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    <?php
        foreach($registrations as $registration):
    ?>
        <tr>
            <td><?= $registration['name']; ?></td>
            <td><?= $registration['email']; ?></td>
            <td><?= $registration['phone']; ?></td>
        </tr>
    <?php
        endforeach;
    ?>
    </table>
</body>
</html>
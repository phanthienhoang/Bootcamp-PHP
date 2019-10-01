<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    .login {
          height:200px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px
    }
    </style>  
</head>
<body>
    <form method = "post">
        <div class = "login">
            <h1>Login</h1>
            <input type="text" name = "username" size = "25" placeholder="username" />
            <input type="text" name = "password" size = "25" placeholder="password" />
            <input type="submit" value = "sign"/>
        </div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"]; 
        $password = $_POST["password"];
            
        if ($username === "admin" && $password === "admin") {	 
                echo"Welcome";
            } else{
                echo "Login Error";
                }
    }
    ?>
</body>
</html>
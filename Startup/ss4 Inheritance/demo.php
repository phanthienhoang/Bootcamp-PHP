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
        class User
        {
            public function __construct($username, $usserld, $email, $passworrd)
            {
                $this->username =$username;
                $this->usserld =$usserld;
                $this->email = $email;
                $this->passworrd = $passworrd;
            }
            public function Login()
            {
                echo "ddangw nhap thanh cong";
            }
            public function Logout()
            {
                echo "thoat";
            }
        }
        class Admin extends User
        {
            public function __construct($username, $usserld, $email, $passworrd, $accessLevel)
            {
                parent :: __construct($username, $usserld, $email, $passworrd);

                $this->accessLevel = $accessLevel;
            }
            public function editUser($username)
            {
                $this->username =$username;
            }
        }
        $user1 = new Admin("hoang","ca05","ahass","ashdhsshdas@gmail.com","dasdasd");
        echo $user1->Login();
    ?>
</body>
</html>
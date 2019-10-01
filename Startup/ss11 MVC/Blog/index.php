<?php
    require "Model/DBConnection.php";
    require "Model/PostDB.php";
    require "Model/Post.php";
    require "Controller/PostController.php";

    use \Controller\PostController;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm mới khách hàng</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="navbar navbar-default">
      <a class="navbar-brand" href="index.php">Blog</a>
  </div>
  <?php
   $controller = new PostController();
   $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
   switch ($page){
       case 'add':
           $controller->add();
           break;
       case 'view':
           $controller->view();
           break;
       case 'delete':
           $controller->delete();
           break;
       case 'edit':
           $controller->edit();
           break;
       default:
           $controller->index();
           break;
   }
  ?>
</div>
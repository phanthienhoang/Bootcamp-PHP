<?php
    require "database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <caption><h3>Libary Manager</h3></caption>
            <tr>
                <th>Home<th>
                <th>Book</th>
                <th>Reader</th>
                <th>Brrow books</th>
                <th>Author</th>
                <th><a href="layout/layout.php">Categories</a><th>
            </tr>
        </table>
    </div>
</body>
</html>
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
    <table>
                <tr>
                    <th>categoryCode</th>
                    <th>categoryName</th>
                    <th>textDecription</th>
                </tr>
    <?php
     class DBconnection
     {
         private $servername='127.0.0.1';
         private $dbname='quan_ly_thu_vien';
         private $username='root';
         private $password='';
       
         public function connect()
         {
             $conn=new PDO("mysql:host=$this->servername;dbname=$this->dbname", "$this->username", "$this->password");
             return $conn;
         }
     }
     
     $db = new  DBconnection();
     $conn = $db->connect();
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * FROM categories"); 
     $stmt->execute();
     $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $result =$stmt->fetchAll();
    foreach ($result as $key=>$item)
    {
        echo '<tr>';
        echo '<td>'.$item["categoryCode"].'</td>';
        echo '<td>'.$item["categoryName"].'</td>';
        echo '<td>'.$item["textDecription"].'</td>';
        echo '</tr>';   
    }
    ?>
    </table>
    <form method = "POST">
        <div>
            <h3>thêm dữ liệu vào categories</h3>
            categoryCode   <input type = 'text' name = 'categoryCode'><br>
            categoryName   <input type = 'text' name = 'categoryName'><br>
            textDecription <input type = 'text' name = 'textDecription'><br>
            <input type = 'submit' value = 'ADD NEW' name = 'insert'>
        </div>
    </form>
    <?php
        if(isset($_POST['insert']))
        {   
            $conn = new PDO("mysql:host=localhost;dbname=quan_ly_thu_vien", 'root', '');
            $categoryCode = $_POST['categoryCode'];
            $categoryName = $_POST['categoryName'];
            $textDecription = $_POST['textDecription'];

            //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO categories VALUES ('$categoryCode', '$categoryName', '$textDecription')";
            $stmt = $conn->prepare($sql); 
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_ASSOC);  
            $result1 = $stmt->fetchAll();
            header('location:layout.php');
        }       
    ?>
</body>
</html>
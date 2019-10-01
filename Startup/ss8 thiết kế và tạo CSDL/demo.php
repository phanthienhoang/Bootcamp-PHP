<!DOCTYPE html>
        <html>
            <head>
                <title>PHP MySQL Query Data Demo</title>
                <link href="css/bootstrap.min.css" rel="stylesheet">
                <link href="css/style.css" rel="stylesheet">
            </head>
            <body>
                <div id="container">
                    <h1>Customers</h1>
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Customers Number</th>
                                <th>Customers Name</th>
                                <th>contactLastName</th>
                                <th>phone</th>
                                <th>addressLine1</th>
                                <th>addressLine2</th>
                                <th>city</th>
                                <th>state</th>
                            </tr>
                        </thead>
         
    <?php
        $username = "root"; // Khai báo username
        $password = "";      // Khai báo password
        $server   = "localhost";   // Khai báo server
        $dbname   = "classicmodels";      // Khai báo database
        
        // Kết nối database tintuc
        $connect = mysqli_connect($server, $username, $password, $dbname);
        
        //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
        if (!$connect) {
            die("Không kết nối :" . mysqli_connect_error());
            exit();
        }
        // echo "Khi kết nối thành công sẽ tiếp tục dòng code bên dưới đây.";

        $a = mysqli_query($connect, "select * from customers");
        if(mysqli_num_rows($a)>0) {
            while ($row = mysqli_fetch_assoc($a)){
                echo "<tr>";
                echo "<td>" .$row["customerNumber"]."</td>";
                echo "<td>" .$row["customerName"]."</td>";
                echo "<td>" .$row["contactLastName"]."</td>";
                echo "</tr>";
            }
        }
        ?>
                   </table>
            </body>
        </div>
        </html>
      

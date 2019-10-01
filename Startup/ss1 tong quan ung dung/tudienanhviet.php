<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style> 
        .container {
            width: 300px;
            font-size: 30px;
            border: 15px solid #ccc; 
            border-radius: 10px;
            padding: 12px 10px 12px 10px;
        }
        #search {
            border-radius: 2px;
            border: 5px solid #ccc; 
            padding: 10px 32px;
            font-size: 16px;
            margin: 5px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
    </head>
    <body>      
       <form method = "post">
            <div class = "container">
            <h6>Từ Điển Anh - Việt</h6>
                <input type="text" name="search" id= "search" placeholder="Nhập từ cần tìm"/>
                <input type = "submit" id = "submit" value = "Tìm"/>
          </div>
       </form>
       <?php
            
            $dictionary = array(
                "hello"=>"xin chào", 
                "how"=>"thế nào", 
                "book"=>"quyển vở",
                "computer"=>"máy tính");
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $search = $_POST["search"];
                if($search === "hello"){
                    echo " xin chào ";
                }
                if($search === "how"){
                    echo "thế nào";
                }
                if($search === "book"){
                    echo "quyển vở ";
                }
                if($search === "computer"){
                    echo "máy tính ";
                }
            }
                

       ?>
    </body>
    </html>
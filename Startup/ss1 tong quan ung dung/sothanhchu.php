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
            <h6>Đổi số thành chữ</h6>
                <input type="text" name="search" id= "search" placeholder="Nhập số cần đổi"/>
                <input type = "submit" id = "submit" value = "swap"/>
          </div>
       </form>
       <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $search = $_POST["search"];
                switch($search){
                    case 0: 
                    echo "zero";
                    break;
                    case 1: 
                    echo "one";
                    break;
                    case 2: 
                    echo "two";
                    break;
                    case 3: 
                    echo "three";
                    break;
                    case 4: 
                    echo "four";
                    break;
                    case 5: 
                    echo "five";
                    break;
                    case 6: 
                    echo "six";
                    break;
                    case 7: 
                    echo "seven";
                    break;
                    case 8: 
                    echo "eight";
                    break;
                    case 9: 
                    echo "nice";
                    break;
                    case 10: 
                    echo "ten";
                    break;
                    case 11: 
                    echo "eleven";
                    break;
                    case 12: 
                    echo "twelve";
                    break;
                    case 13: 
                    echo "thirteen";
                    break;
                    case 14: 
                    echo "fourteen";
                    break;
                    case 15: 
                    echo "fiveteen";
                    break;
                    case 16: 
                    echo "sixteen";
                    break;
                    case 17: 
                    echo "seventeen";
                    break;
                    case 18: 
                    echo "eighteen";
                    break;
                    case 19: 
                    echo "niceteen";
                    break;
                    case 20: 
                    echo "twenty";
                    break;
                    default:
                    echo "out of ability";
                }   
            }

       ?>
    </body>
    </html>
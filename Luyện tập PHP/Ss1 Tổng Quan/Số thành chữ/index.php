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
            $arrayNumber = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,7,18,19,20];
            $arrayAlphaB =['zero','one','tow','three','four','five','six','seven','eight','nice','ten',
                        'eleven','twelve','thirteen','fourteen','fiveteen','sixteen', 'seventeen','eighteen',
                        'niceteen','twenty'];
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $search = $_POST["search"];
                function check($x ,$arr,$arr2){
                    $flag = false;
                    for($i=0;$i<count($arr);$i++){
                        if($x == $arr[$i]){
                            echo $arr2[$i];
                            $flag =true;
                        }
                    }
                    if($flag==false){
                        echo 'out of ability';
                    }
                }
            }


            check($search,$arrayNumber,$arrayAlphaB);
       ?>
    </body>
    </html>
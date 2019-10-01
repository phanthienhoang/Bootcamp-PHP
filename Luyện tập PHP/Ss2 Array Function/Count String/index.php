<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Occurrence Of Char</title>
    <style>
    div
    {   
        width:450px;
        margin: 0 auto;
        border: 5px solid #ccc; 
        border-radius: 10px;
        padding: 15px 1px 1px 10px;

    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div>
        <h2>Count Occurrence Of Char</h2>
        <form method="post">
            <fieldset>
            <h3>Input data</h3>
            <label>Input String:</label>
            <input type="text" name="string"><br/><br/>
            <label>Find to char:</label>
            <input type="text" name="char"><br/><br/>
            <input type="submit" id="submit" name="count" value="Find">
            </fieldset>
        </form>
        <h3>Result</h3>
        <?php 
            if ($_POST){
                $string = $_POST["string"];
                $findChar = $_POST["char"];
                $find = $_POST["count"];
                $stringlength = strlen($string);
            } 
            function countOccurrencesChar($str,$char){
                $strlength = strlen($str);
                $count = 0;
                for($i = 0; $i < $strlength; $i++){
                    if($char === $str[$i]){
                        $count += 1;
                    }
                }
                return $count;
            }
            if ($_POST){
                if ($find){
                    try {
                        if(empty($string)){
                            throw new Exception("String input Not empty");
                        }
                        echo "String: ".$string."<br/>";
                        echo "Occurrences of " .$findChar ." is " .countOccurrencesChar($string, $findChar);
                    }
                    catch (Exception $e){
                        echo "Error:" .$e->getMessage();
                    }            
                }
            }
        ?>
    </div>
</body>
</html>
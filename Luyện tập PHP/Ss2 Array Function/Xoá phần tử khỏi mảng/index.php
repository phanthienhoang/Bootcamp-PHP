<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="data" />
        <input type="submit" value="Remove" />
    </form>
    <?php
        $array = array('BMW', 'mazda', 'toyota', 'huyndai');
        foreach($array as $key){
             echo $key." ";
        }
        function find($input, $array)
        {
            $position = null;
            for ($i = 0; $i < count($array); $i++) {
                if ($input == $array[$i]) {
                    $position = $i;
                    return $position;
                };
            };
        };
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST["data"];
            try {
                if (find($input, $array) === null) {
                    throw new Exception("Không có giá trị này trong mảng");
                };
                $index_del = find($input, $array);
                for ($i = $index_del; $i < count($array) - 1; $i++) {
                    $array[$i] = $array[$i + 1];
                };
                array_pop($array);
                array_push($array,'');
                echo "<br>";
                echo "Element removed at: ". $index_del."<br/>";
                foreach($array as $key){
                    echo $key."<br/>";
                }
            } catch (Exception $e) {
                echo "<br>";
                echo $e->getMessage();
            }
        }
    ?>
</body>
</html>
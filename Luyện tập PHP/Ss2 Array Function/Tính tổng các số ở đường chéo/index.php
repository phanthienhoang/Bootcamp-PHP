<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tổng đường chéo chính ma trận vuông</title>
</head>
<body>
    <?php
    $sizeOfArray = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sizeOfArray = $_POST["size"];
    }
    ?>
    <form method="POST">
        <input type="number" placeholder="size of array" value="<?php echo $sizeOfArray ?>" name="size" style='width:100px;'>
        <input type="submit" value="Size of array">
    </form>
    <?php
    function sumDiagonalOfArray($size)
    {
        $matrix = array('row' => array(), 'col' => array());
        echo "<table><tbody>";
        for ($row = 0; $row < $size; $row++) {
            echo "<tr>";
            for ($col = 0; $col < $size; $col++) {
                $matrix[$row][$col] = mt_rand(0, 100);
                if ($row == $col) {
                    echo "<td style='width:50px;'><b>" . $matrix[$row][$col] . "</b></td>";
                } else {
                    echo "<td style='width:50px;'>" . $matrix[$row][$col] . "</td>";
                }
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        $sumDiagonal = 0;
        for ($i = 0; $i < $size; $i++) {
            $sumDiagonal += $matrix[$i][$i];
        }
        return $sumDiagonal;
    }
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = sumDiagonalOfArray($sizeOfArray);
        echo "<br/>$result";
    }
    ?>
</body>
</html>
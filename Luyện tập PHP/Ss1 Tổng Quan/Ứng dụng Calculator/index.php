<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <form method="POST"> 
            <caption>Simple Caculator</caption >
            <tr>
                <td>First operand:</td>
                <td><input type="number" name="first"/></td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="number" name="second"></td>
            </tr>
            <tr>
                <td>Operator:</td> 
                <td><select name="operator">      
                    <option value="addtion">Addition</option>
                    <option value="subtraction">Subtraction</option>
                    <option value="multipcation">Multipcation(X)</option>
                    <option value="division">Division(/)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="=" id="submit"></td>
            </tr>
        </form>
    </table>   
    <?php
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $first =$_POST["first"];
            $second =$_POST["second"];
            $operator =$_POST["operator"];
            switch( $operator){
                case "addtion":
                echo $result= $first + $second;
                break;
                case "subtraction":
                echo $first + $second;
                break;
                case "multipcation":
                echo $first + $second;
                break;
                case "division":
                echo $first + $second;
                break;
            }
        }       
    ?>                
</body>
</html>
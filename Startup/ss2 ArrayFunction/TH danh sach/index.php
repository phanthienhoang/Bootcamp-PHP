<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form>
        <div class="container">
            From:<input type="text" name="from" placeholder="yyyy-mm-dd">
            To:<input type="text" name="to" placeholder="yyyy-mm-dd">
            <input type="submit" id= "submit" value="search">
        </div>
    </form>
  <table border="0">
  <caption><h1>Customer List</h1></caption>
  <tr>
    <th>NO.</th>
    <th>Customer name</th>
    <th>Birth day</th>
    <th>Address</th>
  </tr>

    <?php
        $customer_list = array(
            "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội"),
            "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang"),
            "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định"),
            "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây",),
            "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội",)
        );
        foreach($customer_list as $key => $values){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values['name']."</td>";
            echo "<td>".$values['day_of_birth']."</td>";
            echo "<td>".$values['address']."</td>";
            echo "</tr>";
          }
    ?>
    </table>
</body>
</html>
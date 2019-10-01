<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class Person 
        {
            public $name = " chưa biết ";
            public $age;
            function __construct($age)
            {
                $this->age = $age;
            }
            public function setName($_name=" ")
            {
                $this->name = $_name;
            }
        
        }
        
        $obj1 = new Person(3);
        $obj1->setName("bá");
        var_dump($obj1);
    ?>
</body>
</html>
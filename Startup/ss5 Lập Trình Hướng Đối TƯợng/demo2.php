<?php
    class Bird
    {   
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
    }
    interface Bay
    {   
        const ORIENTATION_LEFT = 1;
        public function bay();
    }
    interface Boi
    {
        public function boi();
    }
    class chimcanhcut extends Bird implements boi
    {
        public function __construct($name)
        {
           parent ::__construct($name);
        }
        public function boi()
        {
            echo "bơi như chim";
        }
    }
    class vit extends Bird implements boi
    {
        public function __construct($name)
        {
           parent ::__construct($name);
        }
        public function boi()
        {
            echo "bơi như vịt";
        }
    }
    class chimbocau extends Bird implements Bay
    {
        public function __construct($name)
        {
           parent ::__construct($name);
        }
        public function bay()
        {
            echo "bay như chim bồ câu";
        }
    }
    $chim = new chimbocau("bá");
    $chim->bay();
    echo $chim->name;
?>
<?php
    abstract class Traicay
    {
        private $color;
        abstract public function eat();
        public function setColor($color)
        {
            $this->color = $color;
        }
    }
    class Apple extends Traicay
    {
        public function eat()
        {
            echo "táo dở vậy bro"."<br>";
        }
    }
    class Orange extends Traicay
    {
        public function eat()
        {
            echo "ngọt sớt"."<br>";
        }
    }
    $apple = new Apple();
    $apple->setColor("blue");
    var_dump($apple);
?>
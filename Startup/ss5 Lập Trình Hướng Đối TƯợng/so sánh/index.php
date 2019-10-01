<?php
    class Circle
    {
        public $radius;
        public $name;
        public function __construct($name, $radius)
        {
            $this->radius = $radius;
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function getRadius() {
            return $this->radius;
        }
        public function setRadius($radius)
        {
            $this->radius = $radius;
        }
    }
    interface Comparable
    {
        public function compareTo($objTwo);
    }
    class ComparableCircle extends Circle implements Comparable
    {
        public function __construct($name, $radius)
        {
            parent::__construct($name, $radius);
        }
        public function compareTo($circleTwo)
        {
            $circleTwoRadius = $circleTwo->getRadius();
            if ($this->getRadius() > $circleTwoRadius) {
                return "lớn hơn";
            }  else if($this->getRadius() < $circleTwoRadius) {
                return "nhỏ hơn";
            } else {
                return "bằng nhau";
            }
        }
    }
    $circleOne = new ComparableCircle('circleOne', 8);
    $circleTwo = new ComparableCircle('circleTwo', 8);
    $circleThree = new ComparableCircle('circleThree', 4);
    $test = $circleThree->compareTo($circleTwo);
    echo ('Comparable: <br>');
    echo $test;
?>
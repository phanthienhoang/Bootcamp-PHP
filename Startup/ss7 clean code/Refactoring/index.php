<?php
    class FizzBuzz
    {
        public $status;
        public function __construct($number)
        {
            if($number % 3 == 0 && $number % 5 == 0) {
                $this->status =  "FizzBuzz";
            } elseif ($number % 3 == 0) {
                $this->status = "Fizz";
            } elseif ($number % 5 == 0) {
                $this->status = "Buzz";
            } else {
                $this->status =  $number."";
            }
        }
        public function __toString()
        {
            return $this->status;
        }
    }

    class FizzBuzzTest extends TestCase
    {
        public function testFizz3()
        {
            $number = 3;
            $expected = "Fizz";
            $result = new FizzBuzz($number);
            $this->assertEquals($expected, $result);
        }
        public function testFizz6()
        {
            $number = 6;
            $expected = "Fizz";
            $result = new FizzBuzz($number);
            $this->assertEquals($expected, $result);
        }
        public function testFizz5()
        {
            $number = 5;
            $expected = "Buzz";
            $result = new FizzBuzz($number);
            $this->assertEquals($expected, $result);
        }
        public function testFizz15()
        {
            $number = 15;
            $expected = "FizzBuzz";
            $result = new FizzBuzz($number);
            $this->assertEquals($expected, $result);
        }
        public function testFizz7()
        {
            $number = 7;
            $expected = $number."";
            $result = new FizzBuzz($number);
            $this->assertEquals($expected, $result);
        }
    }
    $fizzBuzz = new FizzBuzz(15);
    echo $fizzBuzz;
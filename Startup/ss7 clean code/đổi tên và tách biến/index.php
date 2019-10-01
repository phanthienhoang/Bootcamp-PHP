<?php
    class Calculator
    {
        public function calculate($firstOperand, $secondOperand, $operator) {
            switch ($operator) {
                case '+':
                    return $firstOperand + $secondOperand;
                case '-':
                    return $firstOperand - $secondOperand;
                case '*':
                    return $firstOperand * $secondOperand;
                case '/':
                    if ($secondOperand != 0) {
                        return $firstOperand / $secondOperand;
                    } else {
                        echo("Can not divide by 0");
                        break;
                    }
                default:
                    echo ("Unsupported operation");
            }
        }
    }
    class CalculatorTest extends TestCase
    {
        public function testCalculateAdd()
        {
            $firstOperand  = 1;
            $secondOperand = 1;
            $operator = '+';
            $expected = 2;
            $calculator = new Calculator();
            $result = $calculator->calculate($firstOperand , $secondOperand, $ooperator);
            $this->assertEquals($expected, $result);
        }
    }
    const ADDITION = '+';
    const SUBTRACTION = '-';
    const MULTIPLICATION = '*';
    const DIVISION = '/';
    class Calculator
    {
        public function calculate($firstOperand, $secondOperand, $operator) {
            switch ($operator) {
                case ADDITION:
                    return $firstOperand + $secondOperand;
                case SUBTRACTION:
                    return $firstOperand - $secondOperand;
                case MULTIPLICATION:
                    return $firstOperand * $secondOperand;
                case DIVISION:
                    if ($secondOperand != 0) {
                        return $firstOperand / $secondOperand;
                    } else {
                        echo("Can not divide by 0");
                        break;
                    }
                default:
                    echo ("Unsupported operation");
            }
        }
    }

?>
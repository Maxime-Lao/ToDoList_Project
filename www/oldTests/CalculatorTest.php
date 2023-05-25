<?php
    use PHPUnit\Framework\TestCase; 
    require __DIR__ . '/../vendor/autoload.php';
    include __DIR__ . "/../Calculator.class.php";

    class CalculatorTest extends TestCase
    {
        public function testAdd()
        {
            $calc = new Calculator();
            $this->assertEquals(14, $calc->add(5, 9));
        }

        public function testSub()
        {
            $calc = new Calculator();
            $this->assertEquals(2, $calc->sub(6, 4));
        }

        public function testMul()
        {
            $calc = new Calculator();
            $this->assertEquals(9, $calc->mul(3, 3));
        }

        public function testDiv()
        {
            $calc = new Calculator();
            $this->assertEquals(3, $calc->div(6, 2));
        }
    }

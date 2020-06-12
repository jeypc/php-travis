<?php

use Controllers\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calc = null;

    public function setUp(): void
    {   
        $this->calc = new Calculator;
    }

    public function tearDown(): void
    {
        $this->calc = null;
    }

    /**
     * Test instance of $this->calc
     * 
     * @tests
     */
    public function testIntanceOf()
    {
        $this->assertInstanceOf('Controllers\Calculator', $this->calc);
    }

    /**
     * Test provide invalid exception
     * 
     * @tests
     */
    public function testInvalidArgumentIsProperlyThrown()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->add('A', 2);
    }

    /**
     * Test is sum valid
     * 
     * @tests
     */
    public function testValidResult()
    {
        $this->assertEquals(5, $this->calc->add(1, 4));
    }

    /**
     * Test is multiply valid
     * 
     * @tests
     */
    public function testMultiply()
    {
        $this->assertEquals(6, $this->calc->multiply(2, 3));
    }

    /**
     * Test is substract valid
     */
    public function testSubstract()
    {
        $this->assertEquals(2, $this->calc->substract(5, 3));
    }
}
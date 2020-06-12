<?php

namespace Controllers;

use InvalidArgumentException;

class Calculator
{
    public function add($a, $b)
    {
        if ( ! is_int($a) or ! is_int($b) ) {
            throw new InvalidArgumentException("Please enter a numeric value");
        }

        return $a + $b;
    }

    public function multiply($a, $b)
    {
        if ( ! is_int($a) or ! is_int($b) ) {
            throw new InvalidArgumentException("Please enter a numeric value");
        }

        return $a * $b;
    }
}
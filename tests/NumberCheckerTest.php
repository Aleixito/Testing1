<?php

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $evenNumberChecker = new NumberChecker(6);
        $oddNumberChecker = new NumberChecker(5);

        $this->assertTrue($evenNumberChecker->isEven());
        $this->assertFalse($oddNumberChecker->isEven());
    }

    public function testIsPositive()
    {
        $positiveNumberChecker = new NumberChecker(10);
        $negativeNumberChecker = new NumberChecker(-3);

        $this->assertTrue($positiveNumberChecker->isPositive());
        $this->assertFalse($negativeNumberChecker->isPositive());
    }
}

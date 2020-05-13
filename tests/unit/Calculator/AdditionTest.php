<?php

use PHPUnit\Framework\TestCase;
use App\Calculator\Addition;
use App\Calculator\NoOperandsException;

class AdditionTest extends TestCase
{
    /** @test */
    public function checkAddFunctionality()
    {
        $addition = new Addition;

        $addition->setOpperands([1,5]);

        $this->assertEquals(6, $addition->calculate());
    }

    /** @test */
    public function checkNoOperandsException()
    {
        $this->expectException(NoOperandsException::class);

        $addition = new Addition;

        $addition->calculate();
    }
}
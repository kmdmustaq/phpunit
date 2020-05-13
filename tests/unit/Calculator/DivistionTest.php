<?php

use PHPUnit\Framework\TestCase;
use App\Calculator\Division;
use App\Calculator\NoOperandsException;

class DivisionTest extends TestCase
{
    /** @test */
    public function checkDivFunctionality()
    {
        $division = new Division;

        $division->setOpperands([100, 5]);

        $this->assertEquals(20, $division->calculate());
    }

    /** @test */
    public function checkNoOperandsException()
    {
        $this->expectException(NoOperandsException::class);

        $division = new Division;

        $division->calculate();
    }
}
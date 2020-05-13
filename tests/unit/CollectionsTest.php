<?php

use PHPUnit\Framework\TestCase;
use App\Support\Collections;

class CollectionsTest extends TestCase
{
    /** @test */
    public function checkEmptyCollection()
    {
        $collection = new Collections;
        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function checkCount()
    {
        $collection = new Collections(['one', 'two']);
        $this->assertCount(2, $collection->get());
    }
}
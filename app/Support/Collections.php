<?php

namespace App\Support;

class Collections
{
    private $collection;

    public function __construct($collection = [])
    {
        $this->collection = $collection;
    }

    public function get()
    {
        return $this->collection;
    }

    // public function set($collection)
    // {
    //     $this->collection[] = $collection;
    // }

    public function count()
    {
        return count($this->collection);
    }
}
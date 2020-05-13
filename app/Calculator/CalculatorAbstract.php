<?php

namespace App\Calculator;

abstract class CalculatorAbstract
{
    
    protected $opperands = [];

    public function setOpperands($opperands)
    {
        $this->opperands= $opperands;
    }
}
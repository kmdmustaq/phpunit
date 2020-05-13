<?php

namespace App\Calculator;

class Addition extends CalculatorAbstract implements CalculatorInterface
{

    public function calculate()
    {
        if (empty($this->opperands)){
            throw new NoOperandsException;
        }
        
        return array_sum($this->opperands);
    }
}
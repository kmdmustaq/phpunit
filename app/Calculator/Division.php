<?php

namespace App\Calculator;

class Division extends CalculatorAbstract implements CalculatorInterface
{

    public function calculate()
    {
        if (empty($this->opperands)){
            throw new NoOperandsException;
        }

        return array_reduce($this->opperands, function($a, $b) {
            if (!is_null($a) && !is_null($b)) {
                return $a/$b;
            }
            return $b;
        });
    }
}
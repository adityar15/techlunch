<?php

namespace App\Services;

use App\Interface\CostInterface;

class EnergyCost implements CostInterface
{
    public $startDate, $endDate;

    public function __construct($start, $end) {
        $this->startDate = $start;
        $this->end = $end;
    }

    public function process() : float
    {
        // let's assume there is a database call which returns energy consumptions in the specfied date range.
        
        // for loop to calculate costs

        return 200;
    }

    
}
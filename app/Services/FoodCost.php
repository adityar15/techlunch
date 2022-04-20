<?php 

namespace App\Services;

use App\Interface\CostInterface;

class FoodCost implements CostInterface {

    public $startDate, $endDate;

    public function __construct($start, $end) {
        $this->startDate = $start;
        $this->end = $end;
    }

    public function process() : float
    {
        // let's assume there is a database call which returns food consumptions in the specfied date range.
        
        // for loop to calculate costs

        return 100;
    }
}
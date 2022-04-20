<?php 

namespace App\Services;

use App\Interface\TaxInterface;
use App\Interface\CostInterface;
use App\Interface\RentInterface;

class RentCost implements CostInterface, RentInterface, TaxInterface {

    public $startDate, $endDate;

    public function __construct($start, $end) {
        $this->startDate = $start;
        $this->end = $end;
    }

    public function process() : float
    {
        return $this->deposit() + $this->rent();
    }

    public function deposit() : int
    {
       // let's assume there is a database call which returns the deposit paid.
        return 500;
    }

    public function rent() : float
    {
         // let's assume there is a database call which returns the rent paid for the specific period.

         return 4800;
    }

    public function tax() : float
    {
           // let's assume there is a database call which returns the council tax paid for the specific period.

           return 2000;
    }

}
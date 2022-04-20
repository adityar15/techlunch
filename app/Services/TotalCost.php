<?php

namespace App\Services;

use Exception;
use App\Interface\CostInterface;


class TotalCost
{
    public $costs, $total=0;

    public function __construct(array $costs) {
        $this->costs = $costs;
    }

    public function total()
    {
        
        // for loop to calculate costs

        foreach($this->costs as $cost)
        {
            if($cost instanceof CostInterface)
            {
                $this->total += $cost->process();
            }
            else{
                throw new Exception(get_class($cost). " should implement App\Interface\CostInterface" );
            }
        }

        return $this->total;
    }
}
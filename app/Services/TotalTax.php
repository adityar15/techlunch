<?php

namespace App\Services;

use App\Services\TotalCost;
use App\Interface\TaxInterface;

class TotalTax extends TotalCost
{
    public function __construct($costs = [])
    {
        parent::__construct($costs);
    }
    

    public function total()
    {
          // for loop to calculate costs

          foreach($this->costs as $cost)
          {
              if($cost instanceof TaxInterface)
              {
                  $this->total += $cost->tax();
              }
              else{
                  throw new Exception(get_class($cost). " should implement App\Interface\TaxInterface" );
              }
          }
  
          return $this->total;
    }
}
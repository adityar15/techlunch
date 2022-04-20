<?php

namespace App\Services;

use Exception;

class Outputter
{

    public $cost;

    public function __construct(TotalCost $cost)
    {
        $this->cost = $cost;
    }

    public function output($option)
    {
       if($option == "string")
       {
           return "The total is {$this->cost->total()}";
       }
       else if($option == "array")
       {
           return ["total" => $this->cost->total()];
       }
       else {
           throw new Exception("Incorrect format specified");
       }
    }
}
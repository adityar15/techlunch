<?php

namespace App\Http\Controllers;

use App\Services\FoodCost;
use App\Services\RentCost;
use App\Services\TotalTax;
use App\Services\Outputter;
use App\Services\TotalCost;
use App\Services\EnergyCost;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function calculate(Request $request)
    {
        // calculate cost for a date range

        $foodCost = new FoodCost("2021-04-20", "2022-04-21");
        $energyCost = new EnergyCost("2021-04-20", "2022-04-21");
        $rentCost = new RentCost("2021-04-20", "2022-04-21");

        $total = new TotalCost([$foodCost, $energyCost, $rentCost]);

        $totalTax = new TotalTax([$rentCost]);

        return (new Outputter($total))->output("string");
    }
}

<?php

namespace App\Interface;


interface CostInterface{

    public function __construct($startDate, $endDate);

    public function process() : float;
}
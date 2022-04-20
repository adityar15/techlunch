<?php

namespace App\Interface;


interface RentInterface{
    public function deposit() : int;
    public function rent() : float;
}
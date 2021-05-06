<?php

namespace App\Interfaces;

class ChargingStation
{
    public function fullCharge(RechargeableInterface $vehicle) 
    {
        $vehicle->charge(100);
    }
}
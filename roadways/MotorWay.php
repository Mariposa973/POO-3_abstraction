<?php

namespace App\roadways;
use App\roadways\HighWay;
use App\vehicles\Bicycle;
use App\vehicles\Skateboard;

final class MotorWay extends HighWay
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle($newVehicle)
    {
        if(!($newVehicle instanceof Bicycle || $newVehicle instanceof Skateboard)){
            $this->currentVehicles[] = $newVehicle;
        }
    }

}
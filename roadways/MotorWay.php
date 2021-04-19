<?php

require_once 'roadways/HighWay.php';

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
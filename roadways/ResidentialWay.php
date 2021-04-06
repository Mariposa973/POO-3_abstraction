<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle($newVehicle)
    {
            $currentVehicles[] = $newVehicle;
    }
    
}
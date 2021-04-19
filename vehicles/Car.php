<?php

require_once 'vehicles/Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    protected string $energy;
    protected int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        echo "Nouvelle voiture 
        <ul>
        <li> de couleur : $color </li>
        <li> avec $nbSeats sièges, </li>
        <li> et carburant : $energy </li>
        </ul>";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;    
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

   
    /**
     * Get the value of hasParkBrake
     */ 
    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     */ 
    public function setParkBrake(bool $hasParkBrake = true): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        $hasParkBrake = $this->getParkBrake();
        if ($hasParkBrake === TRUE) {
            throw new Exception("Le frein à main est actif");
        }
        $currentSpeed = $this->getCurrentSpeed();
        if($currentSpeed === 0){
            return "Vroom!";
        } else {
            return "La voiture roule déjà!";
        }
    }
}


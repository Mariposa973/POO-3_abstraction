<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    protected self|string $energy;
    protected int $energyLevel;
    protected int $storageCapacity;
    protected int $loading = 0;
    protected int $emptyCapacity;

    public function __construct(
        self|string $color, 
        int $nbSeats, 
        self|string $energy, 
        int $storageCapacity
        )
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        $this->emptyCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): self
    {
        $this->storageCapacity = $storageCapacity;
        return $this;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
    
        if ($loading > $this->emptyCapacity) {
            return "It's not possible";
        }
        $this->emptyCapacity = $this->getStorageCapacity() - $loading;
        $this->loading = $loading;
        return $loading;
    
    }

    public function getEmptyCapacity(): string
    {
        
        if ($this->emptyCapacity === 0) {
            return 'FULL';
        }
        
        return 'In Filling' . " : " . $this->emptyCapacity . " volume left";
        
    }

    public function getEnergy(): self|string
    {
        return $this->energy;
    }

    public function setEnergy(self|string $energy): Truck
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
}

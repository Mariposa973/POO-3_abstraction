<?php
namespace App\vehicles;
use App\vehicles\Vehicle;
use App\Interfaces\RechargeableInterface;

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        $charge=$percentage;
        while($charge<100){
            $charge += 10;
        }
        return $this->$charge;
    }

    public function unLoad(int $percentage): int
    {
        $charge=$percentage;
        while($charge>0){
            $charge -= 10;
        }
        return $this->$charge;
    }
}

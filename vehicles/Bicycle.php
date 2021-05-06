<?php
namespace App\vehicles;
use App\vehicles\Vehicle;

class Bicycle extends Vehicle

{
    public function switchOn(){
        $speed=$this->getCurrentSpeed();
        if($speed>10){
        return true;
        }
    }

    public function switchOff(){
        return false;
    }
}

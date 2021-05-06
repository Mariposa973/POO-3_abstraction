<?php 
namespace App\Interfaces;

interface LightableInterface
{
    public function switchOn(): bool;
    public function switchOff(): bool;
}
?>
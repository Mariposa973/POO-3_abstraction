<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bestTruck = new Truck('white', 6, 'essence', 100);

var_dump($bestTruck);

$bestTruck->setLoading(20);
echo $bestTruck->getLoading() . "<br>";
echo $bestTruck->getEmptyCapacity();

var_dump($bestTruck);

echo $bestTruck->setCurrentSpeed(100) .'<br>';
echo '<br> Vitesse du Camion : ' . $bestTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $bestTruck->brake();
echo '<br> Vitesse du Camion : ' . $bestTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $bestTruck->brake() . '<br>'  ;

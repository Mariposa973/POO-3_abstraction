<?php
require_once 'vehicles/Bicycle.php';
require_once 'vehicles/Car.php';
require_once 'vehicles/Truck.php';
require_once 'vehicles/Skateboard.php';
require_once 'roadways/MotorWay.php';
require_once 'roadways/PedestrianWay.php';
require_once 'roadways/ResidentialWay.php';


$bike = new Bicycle('white', 1);
$myCar = new Car('red', 5, 'electric');

//$bike->setColor('blue');
$bike->setCurrentSpeed(0);

echo '<h3>Informations sur le vélo</h3>';
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>'  ;


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', 2);
//$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black', 1);
//$tornado->setColor('black');
$tornado->forward();

echo '<h3>Informations sur la voiture</h3>';
// Moving car
echo $myCar->forward();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->forward();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();

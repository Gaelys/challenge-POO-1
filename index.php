<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';



$bike = new Bicycle("blue", 1);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$citroen = new Car("blue", 4, "fuel");
var_dump($citroen);

echo $citroen->forward() . '<br/>';
echo '<br> Vitesse de la voiture : ' . $citroen->getCurrentSpeed() . ' km/h' . '<br>';
echo $citroen->brake();
echo '<br> Vitesse de la voiture : ' . $citroen->getCurrentSpeed() . ' km/h' . '<br>';
echo $citroen->brake();

$vtt = new Bicycle("red", 2);
var_dump($vtt);

echo $vtt->forward();
echo '<br> Vitesse du vélo : ' . $vtt->getCurrentSpeed() . ' km/h' . '<br>';
echo $vtt->brake();
echo '<br> Vitesse du vélo : ' . $vtt->getCurrentSpeed() . ' km/h' . '<br>';
echo $vtt->brake();


$maserati = new Car("rouge", 5, "electric");
var_dump($maserati);


echo $maserati->forward() . '<br/>';
echo '<br> Vitesse de la voiture : ' . $maserati->getCurrentSpeed() . ' km/h' . '<br>';
echo $maserati->brake();
echo '<br> Vitesse de la voiture : ' . $maserati->getCurrentSpeed() . ' km/h' . '<br>';
echo $maserati->brake();

$cam = new Truck("green", 2, 12,"fuel");
var_dump($cam);

echo $cam->forward() . '<br/>';
echo '<br> Vitesse du camion : ' . $cam->getCurrentSpeed() . ' km/h' . '<br>';
echo $cam->brake();
echo '<br> Vitesse du camion : ' . $cam->getCurrentSpeed() . ' km/h' . '<br>';
echo $cam->brake() . '<br/>';


echo '<br> Chargement du camion : ' . $cam->getLoad() . ' Tonnes<br/>';
echo $cam->statusStorageCapacity();
$cam->setLoad(6);
echo '<br> Chargement du camion : ' . $cam->getLoad() . ' Tonnes<br/>';
echo $cam->statusStorageCapacity();
$cam->setLoad(12);
echo '<br> Chargement du camion : ' . $cam->getLoad() . ' Tonnes<br/>';
echo $cam->statusStorageCapacity();

$road = new MotorWay();
var_dump($road);
$walk = new PedestrianWay();
var_dump($walk);
$town = new ResidentialWay();
var_dump($town);

$road->addVehicle($maserati);
var_dump($road);
$road->addVehicle($bike);
var_dump($road);
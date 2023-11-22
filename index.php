<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue", 0, 0, 2, 2);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$citroen = new Car("blue", 4, "essence");
var_dump($citroen);

echo $citroen->start() . '<br/>';
echo $citroen->forward() . '<br/>';
echo $citroen->brake();


$vtt = new Bicycle("red", 0, 1, 1, 2);
var_dump($vtt);

echo $vtt->forward();
echo '<br> Vitesse du vélo : ' . $vtt->getCurrentSpeed() . ' km/h' . '<br>';
echo $vtt->brake();
echo '<br> Vitesse du vélo : ' . $vtt->getCurrentSpeed() . ' km/h' . '<br>';
echo $vtt->brake();


$maserati = new Car("rouge", 5, "gasoil");
var_dump($maserati);

echo $maserati->start() . '<br/>';
echo $maserati->forward() . '<br/>';
echo $maserati->brake();
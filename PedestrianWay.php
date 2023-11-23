<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay {

    public function __construct() {
    $this->nbLane = 1;
    $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $car) {
        if (($car instanceof Bicycle) || ($car instanceof Skateboard)) {
            $this->currentVehicles [] = $car;
        }
    }
}
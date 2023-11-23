<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay {

    public function __construct() {
        $this->nbLane = 4 ; 
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $car) {
        if (!($car instanceof Bicycle)) {
            $this->currentVehicles [] = $car;
        }
    }
}
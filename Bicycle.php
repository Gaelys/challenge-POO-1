<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle {
    public function start():string {
        return "le vélo démarre";
    }

}
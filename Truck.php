<?php
require_once 'Vehicle.php';

class Truck extends Vehicle {
    private int $storageCapacity;
    private float $load;
    private string $energy;

    public function __construct(string $color, int $nbSeats, int $storageCapacity, string $energy){
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
        $this->load = 0;
        $this->setEnergy($energy);
    }

    public function getStorageCapacity(): int {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void {
        if ($storageCapacity >= 0) {
            $this->storageCapacity = $storageCapacity;
        }
    }

    public function getLoad(): float {
        return $this->load;
    }

    public function setLoad(float $load): void {
        if (($load >= 0) && ($this->storageCapacity >= $load)) {
        $this->load = $load;
        }
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): void {
        $this->energy = $energy;
    }

    public function statusStorageCapacity(): string {
        $storageCapacity = $this->getStorageCapacity();
        $load = $this->getLoad();
        $sentence =  "infilling";
        if ($storageCapacity == $load) {
            $sentence = "full";
        }
        return $sentence;
    }
}
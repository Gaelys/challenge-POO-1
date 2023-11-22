<?php

class Car {
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        return "La voiture démarre !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "La voiture avance à 15 km/h!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }    

    
    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): void {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void {
        $this->energyLevel = $energyLevel;
    }
}

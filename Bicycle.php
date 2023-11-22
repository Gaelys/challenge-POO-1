<?php

class Bicycle {
    private string $color;
    private int $currentSpeed;
    private bool $luggageRack;
    private int $nbSeats;
    private int $nbWheels;


    public function __construct(string $color, int $currentSpeed, bool $luggageRack, int $nbSeats, int $nbWheels) {
        
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->luggageRack = $luggageRack;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
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

    public function dump()
    {
        var_dump($this);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void 
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getluggageRack(): int
    {
        return $this->luggageRack;
    }
    public function setluggageRack(bool $luggageRack): void
    {
        $this->luggageRack = $luggageRack;
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
}
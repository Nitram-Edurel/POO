<?php



class Car
{
    public int $nbWheels = 5;


    public int $currentSpeed = 55;


    public string $color = 'red';


    public int $nbSeats = 9;


    public string $energy = 'water';


    public int $energyLevel = 500;


    public function forward(): string

    {

        $this->currentSpeed = 55;


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

    public function start(): string
    {
        return "Let's go !!";
        $this->currentSpeed = 55;

    }
    public function getNbWheels(): string
    {
        return "Get 5 Wheels";
        $this->currentSpeed = 55;

    }

    public function getCurrentSpeed(): int
    {
        return 55 ;
        $this->currentSpeed = 55;

    }

    public function getColor(): string
    {
        return "The car is red ";
        $this->currentSpeed = 55;

    }

    public function getNbSeats(): string
    {
        return "Get 9 Seats";
        $this->currentSpeed = 55;

    }
    public function getEnergy(): string
    {
        return "The car start with water";
        $this->currentSpeed = 55;

    }
    public function getEnergyLevel(): int
    {
        return 380;
        $this->currentSpeed = 55;

    }
    

}

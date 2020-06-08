<?php

// Vehicle.php

/**
 * Class Vehicle
 */
class Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;

    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    /**
     *
     */
    public function start()
    {

    }

    /**
     * @param int $speed
     * @return string
     */
    public function forward(int $speed = 25) : string
    {
        if ($speed > 0) {
            $this->currentSpeed += $speed;
            return "We're faster ! The vehicle is going at $this->currentSpeed" . "km/h ! <br>";
        } else {
            return "Invalid speed <br>";
        }
    }

    /**
     * @param int $brakes
     * @return string
     */
    public function brake(int $brakes = 25) : string
    {
        if ($brakes <= 0) {
            return "Invalid braking value <br>";
        } else if ($brakes >= $this->currentSpeed) {
            $this->currentSpeed = 0;
            return "We stopped ! <br>";
        } else {
            $this->currentSpeed -= $brakes;
            return "We're slower ! The vehicle is going at $this->currentSpeed" . "km/h ! <br>";
        }
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     */
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}

<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    const ALLOWED_ENERGIES = ["fuel", "electric"];

    /**
     * @var bool
     */
    private $hasParkBrake = true;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    /**
     * @throws Exception
     */
    public function start()
    {
        if ($this->hasParkBrake === false) {
            throw new Exception("Le frein a main est enclenché");
        }
    }

    /**
     * @param bool $hasParkBrake
     * @return void
     */
    public function setParkBrake(Bool $hasParkBrake) : void
    {
        if ($hasParkBrake === true) {
            $this->hasParkBrake = true;
        } else {
            $this->hasParkBrake = false;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}

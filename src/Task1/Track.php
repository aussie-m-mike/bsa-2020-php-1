<?php

declare(strict_types=1);

namespace App\Task1;

class Track
{
	protected $lapLength;
	protected $lapsNumber;
	protected $cars = [];

    public function __construct(float $lapLength, int $lapsNumber)
    {
		$this->lapLength = $lapLength;
		$this->lapsNumber = $lapsNumber;
    }

    public function getLapLength(): float
    {
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        return $this->lapsNumber;
    }

    public function add(Car $car): void
    {
        $this->cars[] = $car;
    }

    public function all(): array
    {
        return $this->cars;
    }

    public function run(): Car
    {
    	$winner = $this->all()[0];

    	foreach ($this->all() as $car){
    		if($this->getTotalTime($car) < $this->getTotalTime($winner))
			{
				$winner = $car;
			}
		}

        return $winner;
    }

    protected function getDistance(): float
	{
		return $this->lapsNumber * $this->lapLength;
	}

	protected function getTotalTime(Car $car): float
	{
		return $this->getTime($car) + $this->getPitStopTime($car);
	}

	protected function getTime(Car $car): float
	{
		return $this->getDistance() / $car->getSpeed() * 60 * 60;
	}

	protected function getFuelConsumption(Car $car): float
	{
		return $this->getDistance() / 100 * $car->getFuelConsumption();
	}

	protected function getPitStopNumber(Car $car): float
	{
		return ceil(($this->getFuelConsumption($car) / $car->getFuelTankVolume()) - 1);
	}

	protected function getPitStopTime(Car $car): float
	{
		return $car->getPitStopTime() * $this->getPitStopNumber($car);
	}
}
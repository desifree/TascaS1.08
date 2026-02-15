<?php
namespace App;

class SpeedSensor {

    private int $speed;

    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    public function rateSpeed(): string
    {
        if ($this->speed < 30) {
            return "Very slow";
        }

        if ($this->speed <= 60) {
            return "Suitable speed";
        }

        if ($this->speed <= 80) {
            return "Slight excess";
        }

        if ($this->speed <= 100) {
            return "Moderate excess";
        }

        return "Serious excess";
    }
}
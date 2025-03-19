<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

class Truck implements Vehicle
{
    public float $speed = 0.0;

    public function accelerate(): float
    {
        $this->speed += 1.75;
        return $this->speed;
    }

    public function brakes(): float
    {
        $this->speed -= 2;

        if ($this->speed < 0) {
            $this->speed = 0;
        }

        return $this->speed;
    }
}

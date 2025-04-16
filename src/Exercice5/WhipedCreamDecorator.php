<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice5;

class WhipedCreamDecorator extends BeverageDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whiped Cream';
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + 1.0;
    }
}

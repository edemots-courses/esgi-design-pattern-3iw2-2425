<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

class Pizza
{
    public function __construct(
        public string $size,
        public string $crust,
        public string $sauce,
        public string $cookingInstructions,
        public array $cheese = [],
        public array $toppings = [],
    ) {}

    public function getSize(): string
    {
        return $this->size;
    }

    public function getCrustType(): string
    {
        return $this->crust;
    }

    public function getSauce(): string
    {
        return $this->sauce;
    }

    public function getCheeses(): array
    {
        return $this->cheese;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }

    public function getCookingInstructions(): string
    {
        return $this->cookingInstructions;
    }
}

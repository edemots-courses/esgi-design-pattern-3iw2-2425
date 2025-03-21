<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

/**
 * @property string[] $cheeses
 * @property string[] $toppings
 */
class Pizza
{
    // protected string $size;
    // protected string $crust;
    // protected string $sauce;
    // protected array $cheeses;
    // protected array $toppings = [];
    // protected string $cookingInstructions = 'normal';

    // public function __construct(
    //     string $size,
    //     string $crust,
    //     string $sauce,
    //     array $cheeses,
    //     array $toppings = [],
    //     string $cookingInstructions = 'normal'
    // ) {
    //     $this->size = $size;
    //     $this->crust = $crust;
    //     $this->sauce = $sauce;
    //     $this->cheeses = $cheeses;
    //     $this->toppings = $toppings;
    //     $this->cookingInstructions = $cookingInstructions;
    // }

    public function __construct(
        protected string $size,
        protected string $crust,
        protected string $sauce,
        protected array $cheeses,
        protected array $toppings = [],
        protected string $cookingInstructions = 'normal'
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
        return $this->cheeses;
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

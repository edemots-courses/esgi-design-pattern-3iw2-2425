<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

use LogicException;

class PizzaBuilder extends AbstractPizzaBuilder implements CanBuildPizza
{
    protected string $size;
    protected string $crust;
    protected string $sauce;
    protected array $cheeses = [];
    protected array $toppings = [];
    protected string $cookingInstructions = 'normal';

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function sizeSmall(): self
    {
        $this->size = 'small';
        return $this;
    }

    public function sizeMedium(): self
    {
        $this->size = 'medium';
        return $this;
    }

    public function sizeLarge(): self
    {
        $this->size = 'large';
        return $this;
    }

    public function setCrustType(string $crust): self
    {
        $this->crust = $crust;
        return $this;
    }

    public function crustThin(): self
    {
        $this->crust = 'thin';
        return $this;
    }

    public function crustThick(): self
    {
        $this->crust = 'thick';
        return $this;
    }

    public function crustRegular(): self
    {
        $this->crust = 'regular';
        return $this;
    }

    public function setSauce(string $sauce): self
    {
        $this->sauce = $sauce;
        return $this;
    }

    public function tomatoSauce(): self
    {
        $this->sauce = 'tomato';
        return $this;
    }

    public function bbqSauce(): self
    {
        $this->sauce = 'bbq';
        return $this;
    }

    public function whiteSauce(): self
    {
        $this->sauce = 'white';
        return $this;
    }

    public function addCheese(string $cheese): self
    {
        $this->cheeses[] = $cheese;
        return $this;
    }

    public function addTopping(string $topping): self
    {
        if (count($this->toppings) >= 8) {
            throw new LogicException('Vous ne pouvez pas ajouter plus de 8 garnitures à la pizza.');
        }

        $this->toppings[] = $topping;
        return $this;
    }

    public function setCookingInstructions(string $cookingInstructions): self
    {
        $this->cookingInstructions = $cookingInstructions;
        return $this;
    }

    public function cookWellDone(): self
    {
        $this->cookingInstructions = 'well done';
        return $this;
    }

    public function cookNormally(): self
    {
        $this->cookingInstructions = 'normal';
        return $this;
    }

    public function cookLightly(): self
    {
        $this->cookingInstructions = 'light';
        return $this;
    }

    public function build(): Pizza
    {
        if (!isset($this->size)) {
            throw new LogicException('Veuillez préciser la taille de la pizza.');
        }
        if (!isset($this->crust)) {
            throw new LogicException('Veuillez préciser le type de pâte de la pizza.');
        }
        if (count($this->cheeses) < 1) {
            throw new LogicException('Veuillez ajouter au moins un fromage à la pizza.');
        }

        return new Pizza(
            size: $this->size,
            crust: $this->crust,
            sauce: $this->sauce,
            cheeses: $this->cheeses,
            toppings: $this->toppings,
            cookingInstructions: $this->cookingInstructions
        );
    }
}

<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

class PizzaBuilder implements CanBuildPizza
{
    public string $size = '';
    public string $crust = '';
    public string $sauce = '';
    public string $cookingInstructions = '';
    public array $cheese = [];
    public array $toppings = [];

    public function reset(): CanBuildPizza
    {
        return new self();
    }

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }
    public function setCrustType(string $crust): self
    {
        $this->crust = $crust;
        return $this;
    }
    public function setSauce(string $sauce): self
    {
        $this->sauce = $sauce;
        return $this;
    }
    public function addCheese(string $cheese): self
    {
        $this->cheese[] = $cheese;
        return $this;
    }
    public function addTopping(string $topping): self
    {
        $this->toppings[] = $topping;
        return $this;
    }

    public function setCookingInstructions(string $cookingInstructions): self
    {
        $this->cookingInstructions = $cookingInstructions;
        return $this;
    }

    public function build(): Pizza
    {
        if (
            empty($this->cheese)
            || (count($this->toppings) > 8)
            || empty($this->size)
            || empty($this->crust)
        ) {
            throw new \LogicException();
        }

        return new Pizza(
            size: $this->size,
            crust: $this->crust,
            sauce: $this->sauce,
            cheese: $this->cheese,
            toppings: $this->toppings,
            cookingInstructions: $this->cookingInstructions,
        );
    }
}

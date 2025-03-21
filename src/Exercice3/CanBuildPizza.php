<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

interface CanBuildPizza
{
    public function reset(): self;

    /* setters, adders */
    public function setSize(string $size): self;
    public function sizeSmall(): self;
    public function sizeMedium(): self;
    public function sizeLarge(): self;
    public function setCrustType(string $crust): self;
    public function crustThin(): self;
    public function crustThick(): self;
    public function crustRegular(): self;
    public function setSauce(string $sauce): self;
    public function tomatoSauce(): self;
    public function bbqSauce(): self;
    public function whiteSauce(): self;
    public function addCheese(string $cheese): self;
    public function addTopping(string $topping): self;
    public function setCookingInstructions(string $cookingInstructions): self;
    public function cookWellDone(): self;
    public function cookNormally(): self;
    public function cookLightly(): self;

    public function build(): Pizza;
}

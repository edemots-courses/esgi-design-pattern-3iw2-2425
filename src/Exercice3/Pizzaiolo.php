<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

class Pizzaiolo
{
    private CanBuildPizza $builder;

    public function setBuilder(CanBuildPizza $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMargherita(): Pizza
    {
        return $this->builder->reset()
            ->sizeMedium()
            ->crustRegular()
            ->tomatoSauce()
            ->addCheese(CheeseEnum::MOZZARELLA->value)
            ->build();
    }

    public function buildPepperoni(): Pizza
    {
        return $this->builder->reset()
            ->sizeMedium()
            ->crustRegular()
            ->tomatoSauce()
            ->addCheese(CheeseEnum::MOZZARELLA->value)
            ->addTopping(ToppingEnum::PEPPERONI->value)
            ->build();
    }

    public function buildVegetarian(): Pizza
    {
        return $this->builder->reset()
            ->sizeMedium()
            ->crustThin()
            ->tomatoSauce()
            ->addCheese(CheeseEnum::MOZZARELLA->value)
            ->addCheese(CheeseEnum::CHEDDAR->value)
            ->addTopping(ToppingEnum::MUSHROOM->value)
            ->addTopping(ToppingEnum::OLIVE->value)
            ->addTopping(ToppingEnum::SALAD->value)
            ->setCookingInstructions('light')
            ->build();
    }
}

<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice3;

abstract class AbstractPizzaBuilder implements CanBuildPizza
{
    public function reset(): CanBuildPizza
    {
        return new static();
    }
}

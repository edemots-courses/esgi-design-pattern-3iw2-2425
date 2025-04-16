<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice5;

abstract class BeverageDecorator implements Beverage
{
    public function __construct(
        protected Beverage $beverage,
    ) {}
}

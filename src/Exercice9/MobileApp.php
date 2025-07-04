<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice9;

class MobileApp implements Observer
{
    public function update(float $stockPrice): void
    {
        echo "Mobile App: The stock price has changed to $stockPrice.\n";
    }
}

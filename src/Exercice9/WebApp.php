<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice9;

class WebApp implements Observer
{
    public function update(float $stockPrice): void
    {
        echo "Web App: The stock price has changed to $stockPrice.\n";
    }
}

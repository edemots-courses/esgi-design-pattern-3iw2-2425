<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice9;

class StockMarket implements Observable
{
    private array $observers = [];

    private float $stockPrice = 0.0;

    public function setStockPrice(float $price): void
    {
        $this->stockPrice = $price;
        $this->notify();
    }

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, function ($obs) use ($observer) {
            return spl_object_hash($obs) !== spl_object_hash($observer);
        });
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            echo "Notifying observer: " . $this->stockPrice . "\n";
            $observer->update($this->stockPrice);
        }
    }
}

<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;


class SeaShipping implements ShippingMethod
{
    public function calculateCost(float $weight, float $distance): float
    {
        return 30.0 + (0.3 * $distance) + (0.5 * $weight);
    }

    public function getEstimatedDays(): array
    {
        return [7, 14];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return 'SEA-' . $trackingNumber;
    }
}

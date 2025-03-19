<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice2;


class GroundShipping implements ShippingMethod
{
    public function calculateCost(float $weight, float $distance): float
    {
        return 10.0 + (0.5 * $distance) + (1.0 * $weight);
    }

    public function getEstimatedDays(): array
    {
        return [3, 5];
    }

    public function formatTracking(string $trackingNumber): string
    {
        return 'GRD-' . $trackingNumber;
    }
}

<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice7;

class Product implements Entity
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected float $price,
    ) {}

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}

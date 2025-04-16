<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice7;

class User implements Entity
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $email,
    ) {}

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}

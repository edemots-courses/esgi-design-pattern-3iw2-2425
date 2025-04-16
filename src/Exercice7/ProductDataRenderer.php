<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice7;

class ProductDataRenderer extends DataRenderer
{
    public function render(Entity $entity): string
    {
        return $this->formatter->format($entity->toArray());
    }
}

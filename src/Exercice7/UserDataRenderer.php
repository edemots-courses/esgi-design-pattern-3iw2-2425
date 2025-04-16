<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice7;

class UserDataRenderer extends DataRenderer
{
    public function render(Entity $entity): string
    {
        return $this->formatter->format($entity->toArray());
    }
}

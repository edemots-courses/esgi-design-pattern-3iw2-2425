<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice6;

interface OrganizationUnit
{
    public function getId(): int;
    public function displayDetails(int $indentation = 0): string;
}

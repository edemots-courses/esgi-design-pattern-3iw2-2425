<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice6;

class Employee implements OrganizationUnit
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $jobTitle,
    ) {
    }

    public function displayDetails(int $indentation = 0): string
    {
        return
            "\n\n".
            str_repeat("    ", $indentation).'Employee ID : '.$this->id."\n".
            str_repeat("    ", $indentation).'Employee name : '.$this->name."\n".
            str_repeat("    ", $indentation).'Employee job title : '.$this->jobTitle;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }
}

<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice6;

class Department implements OrganizationUnit
{
    protected array $children = [];

    public function __construct(
        protected int $id,
        protected string $name,
    ) {
    }

    public function displayDetails(int $indentation = 0): string
    {
        $details =
            "\n\n".
            str_repeat("    ", $indentation).'Department ID : '.$this->id."\n".
            str_repeat("    ", $indentation).'Department name : '.$this->name."\n".
            str_repeat("    ", $indentation)."Department details :";

        foreach ($this->children as $child) {
            $details .= $child->displayDetails($indentation + 1);
        }

        return $details;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addOrganizationUnit(OrganizationUnit $organizationUnit): self
    {
        $this->children[$organizationUnit->getId()] = $organizationUnit;
        return $this;
    }

    public function removeOrganizationUnit(OrganizationUnit $organizationUnit): self
    {
        unset($this->children[$organizationUnit->getId()]);
        return $this;
    }
}

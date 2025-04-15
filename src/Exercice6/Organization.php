<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice6;

class Organization extends Department
{
    public function __construct(
        protected string $name,
    ) {
        parent::__construct(0, $name);
    }

    public function displayDetails(int $indentation = 0): string
    {
        $details =
            str_repeat("    ", $indentation).'Organization name : '.$this->name."\n".
            str_repeat("    ", $indentation)."Organization details :";

        foreach ($this->children as $child) {
            $details .= $child->displayDetails($indentation + 1);
        }

        return $details;
    }

    public function addOrganizationUnit(OrganizationUnit $organizationUnit): self
    {
        if ($organizationUnit instanceof self) {
            throw new \Exception('You cannot add an organization to another organization.');
        }

        $this->children[$organizationUnit->getId()] = $organizationUnit;
        return $this;
    }
}

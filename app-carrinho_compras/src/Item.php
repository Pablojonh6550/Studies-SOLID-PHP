<?php

namespace App;

class Item
{

    // attributes
    private $name;
    private $value;

    // methods
    public function __construct()
    {
        $this->name = '';
        $this->value = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getValue(): int
    {
        return $this->value;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setValue(float $value): void
    {
        $this->value = $value;
    }
}

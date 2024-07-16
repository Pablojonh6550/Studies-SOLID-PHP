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
    public function getValue(): float
    {
        return $this->value;
    }

    public function setName(string $name): void
    {
        if ($this->hasValidItem($name))
            $this->name = $name;
    }
    public function setValue(float $value): void
    {
        if ($this->hasValidItem($value))
            $this->value = $value;
    }

    private function hasValidItem($data): bool
    {
        if ($data == '')
            return false;

        return true;
    }
}

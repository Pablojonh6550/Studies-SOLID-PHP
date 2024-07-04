<?php

namespace App;

class CarBuy
{
    // attributes
    private $itens;
    private $status;
    private $totalValue;

    // methods
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'true';
        $this->totalValue = 0;
    }
    public function getItens(): array
    {
        return $this->itens;
    }

    public function setItens(string $itens, float $value): bool
    {
        array_push($this->itens, ["item" => $itens, "value" => $value]);
        $this->totalValue += $value;

        return true;
    }

    public function totalValueCar(): float
    {
        return $this->totalValue;
    }
}

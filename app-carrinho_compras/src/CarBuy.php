<?php

namespace App;

use App\Item;

class CarBuy
{

    // attributes
    private $itens;

    // methods
    public function __construct()
    {
        $this->itens = [];
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function setItens(Item $item): bool
    {
        array_push($this->itens, $item);
        return true;
    }

    public function valideteCarBuy(): int
    {
        return count($this->itens) > 0;
    }
}

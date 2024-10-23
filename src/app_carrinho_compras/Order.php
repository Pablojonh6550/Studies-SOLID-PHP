<?php

namespace App;

use App\CarBuy;

class Order
{

    // attributes
    private $status;
    private $carBuy;
    private $carValue;

    // methods
    public function __construct()
    {
        $this->status = 'Aberto';
        $this->carBuy = new CarBuy();
        $this->carValue = 0;
    }

    public function getCarBuy(): CarBuy
    {
        return $this->carBuy;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getCarValue(): float
    {
        foreach ($this->carBuy->getItens() as $keys => $item) {
            $this->carValue += $item->getValue();
        }

        return $this->carValue;
    }

    public function confirm(): bool
    {
        if ($this->carBuy->valideteCarBuy()) {
            $this->setStatus('Confirmado');
            return true;
        }

        return false;
    }
}

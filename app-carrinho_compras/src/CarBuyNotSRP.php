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
        $this->status = 'Aberto';
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function confirmOrder(): bool
    {
        if ($this->valideteCarBuy()) {
            $this->status = 'Confirmado';
            $this->sendEmailConfirmation();
            return true;
        }
        return false;
    }

    public function sendEmailConfirmation(): void
    {
        echo "<br /> ... envia email de confirmação ...";
    }

    public function valideteCarBuy(): int
    {
        return count($this->itens) > 0;
    }
}

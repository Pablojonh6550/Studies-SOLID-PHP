<?php

require __DIR__ . "/vendor/autoload.php";

use App\CarBuy;

$car = new CarBuy();

print_r($car->getItens());
echo 'Valor total: ' . $car->totalValueCar();

$car->setItens("Bicicleta", 750.10);
$car->setItens("Geladeira", 2330.40);
$car->setItens("Fogão", 9890.60);

echo "<br />";

print_r($car->getItens());
echo 'Valor total recalculado: ' . $car->totalValueCar();

echo "<br />";
echo 'Status: ' . $car->getStatus();

$car->confirmOrder();
echo "<br />";
echo 'Status: ' . $car->getStatus();

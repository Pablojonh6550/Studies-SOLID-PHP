<?php

require __DIR__ . "/vendor/autoload.php";

use App\CarBuy;

$car = new CarBuy();

print_r($car->getItens());

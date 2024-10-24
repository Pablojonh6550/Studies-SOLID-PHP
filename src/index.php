<?php
require __DIR__ . "../../vendor/autoload.php";

use App\Reader;

$leitor = new Reader();
$leitor->setDir(__DIR__ . "/app_etl");
$leitor->setFile("dados_teste.csv");
echo '<pre>';
print_r($leitor->read());
echo '</pre>';

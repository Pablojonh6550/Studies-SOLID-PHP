<?php

require __DIR__ . "/vendor/autoload.php";

use App\CarBuy;
use App\Item;
use App\Order;
use App\EmailService;

$order = new Order();
// ------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setName('Porta Copo');
$item1->setValue(4.55);

$item2->setName('Lâmpada');
$item2->setValue(8.34);

// ------------------------------
echo '<h4>Pedido Iniciado</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';

// ------------------------------
$order->getCarBuy()->setItens($item1);
$order->getCarBuy()->setItens($item2);

// ------------------------------
echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';

// ------------------------------
echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($order->getCarBuy()->getItens());
echo '</pre>';

// ------------------------------
echo '<h4>Valor do pedido</h4>';
echo '<pre>';
print_r($order->getCarValue());
echo '</pre>';

// ------------------------------
echo '<h4>Carrinho está válido?</h4>';
echo $order->getCarBuy()->valideteCarBuy();

// ------------------------------
echo '<h4>Status do pedido?</h4>';
echo $order->getStatus();

// ------------------------------
echo '<h4>Confirmar pedido</h4>';
echo $order->confirm();

// ------------------------------
echo '<h4>E-mail?</h4>';
if ($order->getStatus() == 'Confirmado') {
  echo EmailService::triggerEmail();
}

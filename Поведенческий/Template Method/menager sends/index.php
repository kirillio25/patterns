<?php

require_once 'StandardOrder.php';
require_once 'DeliveryOrder.php';

echo "=== Обычный заказ ===\n";
$standardOrder = new StandardOrder();
$standardOrder->processOrder();

echo "\n=== Заказ с доставкой ===\n";
$deliveryOrder = new DeliveryOrder();
$deliveryOrder->processOrder();

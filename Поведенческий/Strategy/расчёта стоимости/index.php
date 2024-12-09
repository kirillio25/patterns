<?php

require_once 'ShippingContext.php';
require_once 'StandardShipping.php';
require_once 'ExpressShipping.php';
require_once 'PickupShipping.php';

// Создаем контекст с выбранной стратегией
$shippingContext = new ShippingContext(new StandardShipping());

// Пример расчёта стоимости для стандартной доставки
$weight = 2.5;  // вес товара 2.5 кг
$destination = "Москва";
echo "Стоимость доставки (стандартная): " . $shippingContext->calculateShippingCost($weight, $destination) . " руб\n";

// Меняем стратегию на экспресс-доставку
$shippingContext->setStrategy(new ExpressShipping());
echo "Стоимость доставки (экспресс): " . $shippingContext->calculateShippingCost($weight, $destination) . " руб\n";

// Меняем стратегию на самовывоз
$shippingContext->setStrategy(new PickupShipping());
echo "Стоимость доставки (самовывоз): " . $shippingContext->calculateShippingCost($weight, $destination) . " руб\n";

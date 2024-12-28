<?php

namespace Поведенческий\Template use OrderTemplate;

Method\menager sends;
require_once 'OrderTemplate.php';

class StandardOrder extends OrderTemplate
{
    protected function deliver(): void
    {
        echo "Товары переданы клиенту на кассе.\n";
    }
}

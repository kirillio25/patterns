<?php

require_once 'OrderTemplate.php';

class StandardOrder extends OrderTemplate
{
    protected function deliver(): void
    {
        echo "Товары переданы клиенту на кассе.\n";
    }
}

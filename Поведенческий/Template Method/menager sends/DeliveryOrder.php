<?php

require_once 'OrderTemplate.php';

class DeliveryOrder extends OrderTemplate
{
    protected function deliver(): void
    {
        echo "Товары отправлены курьером по указанному адресу.\n";
    }

    protected function sendNotification(): void
    {
        echo "Уведомление о доставке отправлено клиенту по email.\n";
    }
}

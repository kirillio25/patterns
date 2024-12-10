<?php

abstract class OrderTemplate
{
    // Шаблонный метод
    public final function processOrder(): void
    {
        $this->selectItems();
        $this->makePayment();
        $this->deliver();
        $this->sendNotification();
    }

    // Общие шаги
    protected function selectItems(): void
    {
        echo "Товары выбраны.\n";
    }

    protected function makePayment(): void
    {
        echo "Оплата произведена.\n";
    }

    // Шаг, который будет реализован в подклассах
    abstract protected function deliver(): void;

    // Общий шаг (можно переопределить, если нужно)
    protected function sendNotification(): void
    {
        echo "Уведомление отправлено клиенту.\n";
    }
}

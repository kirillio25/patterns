<?php 

require_once __DIR__ . '/Factories/NotificationFactory.php';

class App 
{
    public function run()
    {
        $factory = new NotificationFactory();

        $emailNotification = $factory->createNotification('email');
        $emailNotification->send('Hello, this is an email notification!');
    }
}
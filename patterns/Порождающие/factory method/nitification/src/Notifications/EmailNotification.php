<?php

namespace Порождающие\factory use NotificationInterface;

method\nitification\src\Notifications;
require_once __DIR__ . '/NotificationInterface.php';

class EmailNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo "Send Email " . $message . "\n";
    }
}
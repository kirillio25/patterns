<?php 
require_once __DIR__ . '/../Notifications/NotificationInterface.php';
require_once __DIR__ . '/../Notifications/EmailNotification.php';
require_once __DIR__ . '/../Notifications/SMSNotification.php';
require_once __DIR__ . '/../Notifications/PushNotification.php';

class NotificationFactory
{
    public function createNotification(string $channel): NotificationInterface
    {
        switch ($channel) {
            case 'email':
                return new EmailNotification();
            // case 'sms':
            //     return new SmsNotification();
            default:
                throw new InvalidArgumentException('Unsupported notification channel');
        }
    }
}
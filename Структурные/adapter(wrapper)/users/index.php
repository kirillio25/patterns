<?php
require_once __DIR__ . '/src/Interfaces/UserInterface.php';
require_once __DIR__ . '/src/Legacy/LegacyUser.php';
require_once __DIR__ . '/src/Adapters/UserAdapter.php';

use App\Legacy\LegacyUser;
use App\Adapters\UserAdapter;

// Создание объекта LegacyUser
$legacyUser = new LegacyUser("Иван Иванов", "ivan@example.com", "+71234567890");

// Обертывание в адаптер
$userAdapter = new UserAdapter($legacyUser);

// Использование адаптера как объекта, реализующего UserInterface
echo "Имя: " . $userAdapter->getName() . PHP_EOL;
echo "Email: " . $userAdapter->getEmail() . PHP_EOL;
echo "Телефон: " . $userAdapter->getPhone() . PHP_EOL;

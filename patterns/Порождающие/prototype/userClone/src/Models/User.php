<?php

namespace Порождающие\prototype\userClone\src\Models;

class User
{
    public $name;
    public $age;
    public $role;
    public $notifications;

    public function __construct($name, $age, $role, $notifications)
    {
        $this->name = $name;
        $this->age = $age;
        $this->role = $role;
        $this->notifications = $notifications;
    }

    // Метод для клонирования объекта
    public function __clone()
    {
        // Глубокое копирование вложенного массива notifications
        $this->notifications = array_merge([], $this->notifications);
    }
}

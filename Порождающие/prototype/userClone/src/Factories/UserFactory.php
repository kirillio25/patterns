<?php

namespace Factories;

use Models\User;

class UserFactory
{
    private $adminPrototype;
    private $userPrototype;

    public function __construct(User $adminPrototype, User $userPrototype)
    {
        $this->adminPrototype = $adminPrototype;
        $this->userPrototype = $userPrototype;
    }

    public function createAdmin()
    {
        return clone $this->adminPrototype;
    }

    public function createUser()
    {
        return clone $this->userPrototype;
    }
}

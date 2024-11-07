<?php
namespace App\Adapters;

use App\Interfaces\UserInterface;
use App\Legacy\LegacyUser;

class UserAdapter implements UserInterface
{
    private $legacyUser;

    public function __construct(LegacyUser $legacyUser)
    {
        $this->legacyUser = $legacyUser;
    }

    public function getName(): string
    {
        return $this->legacyUser->fetchFullName();
    }

    public function getEmail(): string
    {
        return $this->legacyUser->fetchEmailAddress();
    }

    public function getPhone(): string
    {
        return $this->legacyUser->fetchContactNumber();
    }
}

<?php
namespace App\Legacy;

class LegacyUser
{
    private $fullName;
    private $emailAddress;
    private $contactNumber;

    public function __construct($fullName, $emailAddress, $contactNumber)
    {
        $this->fullName = $fullName;
        $this->emailAddress = $emailAddress;
        $this->contactNumber = $contactNumber;
    }

    public function fetchFullName(): string
    {
        return $this->fullName;
    }

    public function fetchEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function fetchContactNumber(): string
    {
        return $this->contactNumber;
    }
}

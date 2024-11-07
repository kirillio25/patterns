<?php
namespace App\Interfaces;

interface UserInterface
{
    public function getName(): string;
    public function getEmail(): string;
    public function getPhone(): string;
}

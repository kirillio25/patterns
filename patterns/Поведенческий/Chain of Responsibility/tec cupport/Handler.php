<?php

namespace Поведенческий\Chain of Responsibility\tec cupport;
interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}

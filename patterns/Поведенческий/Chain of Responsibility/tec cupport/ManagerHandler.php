<?php

namespace Поведенческий\Chain use AbstractHandler;

of Responsibility\tec cupport;
require_once 'AbstractHandler.php';

class ManagerHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Сбой в серверной инфраструктуре") {
            return "Менеджер: Я займусь критической проблемой.";
        }

        return parent::handle($request);
    }
}

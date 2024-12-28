<?php

namespace Поведенческий\Chain use AbstractHandler;

of Responsibility\tec cupport;
require_once 'AbstractHandler.php';

class OperatorHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Как восстановить пароль?") {
            return "Оператор: Я помогу вам восстановить пароль.";
        }

        return parent::handle($request);
    }
}

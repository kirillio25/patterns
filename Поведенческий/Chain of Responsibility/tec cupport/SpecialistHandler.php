<?php

require_once 'AbstractHandler.php';

class SpecialistHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Ошибка при установке программы") {
            return "Специалист: Я помогу вам решить проблему с установкой программы.";
        }

        return parent::handle($request);
    }
}

<?php

namespace Структурные\composite\fileManager;
interface Component
{
    public function getName(): string;

    public function getSize(): int; // Возвращает размер элемента (0 для папок, либо размер файла)

    public function countFiles(): int; // Количество файлов в компоненте
}

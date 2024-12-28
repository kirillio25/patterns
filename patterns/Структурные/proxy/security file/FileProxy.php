<?php

namespace Структурные\proxy\security use FileManager;

file;
require_once 'FileManager.php';

class FileProxy
{
    private FileManager $fileManager;
    private string $userRole;

    public function __construct(string $userRole)
    {
        $this->fileManager = new FileManager();
        $this->userRole = $userRole;
    }

    public function readFile(string $file): void
    {
        echo "Проверка прав на чтение...\n";
        $this->fileManager->readFile($file);
    }

    public function deleteFile(string $file): void
    {
        echo "Проверка прав на удаление...\n";
        if ($this->userRole === "admin") {
            $this->fileManager->deleteFile($file);
        } else {
            echo "Ошибка: У пользователя недостаточно прав для удаления файла.\n";
        }
    }
}

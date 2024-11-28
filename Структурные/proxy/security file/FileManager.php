<?php

class FileManager
{
    private array $files;

    public function __construct()
    {
        $this->files = ["file1.txt", "file2.txt", "file3.txt"];
    }

    public function readFile(string $file): void
    {
        if (in_array($file, $this->files)) {
            echo "Чтение файла: {$file}\n";
        } else {
            echo "Ошибка: Файл '{$file}' не найден.\n";
        }
    }

    public function deleteFile(string $file): void
    {
        if (in_array($file, $this->files)) {
            $key = array_search($file, $this->files);
            unset($this->files[$key]);
            echo "Файл '{$file}' удалён.\n";
        } else {
            echo "Ошибка: Файл '{$file}' не найден.\n";
        }
    }
}

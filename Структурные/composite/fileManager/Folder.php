<?php

require_once 'Component.php';

class Folder implements Component
{
    private $name;
    private $children = []; // Список вложенных компонентов (файлы и папки)

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Component $component): void
    {
        $this->children[] = $component;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        $totalSize = 0;
        foreach ($this->children as $child) {
            $totalSize += $child->getSize();
        }
        return $totalSize;
    }

    public function countFiles(): int
    {
        $fileCount = 0;
        foreach ($this->children as $child) {
            $fileCount += $child->countFiles();
        }
        return $fileCount;
    }
}

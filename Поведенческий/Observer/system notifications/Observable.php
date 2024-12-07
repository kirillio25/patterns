<?php

// Интерфейс наблюдаемого объекта
interface Observable
{
    public function addObserver(Observer $observer): void;
    public function removeObserver(Observer $observer): void;
    public function notifyObservers(string $article): void;
}

// Блог, за которым наблюдают
class Blog implements Observable
{
    private array $observers = [];

    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notifyObservers(string $article): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($article);
        }
    }

    public function publishArticle(string $title): void
    {
        echo "Новая статья опубликована: {$title}\n";
        $this->notifyObservers($title);
    }
}

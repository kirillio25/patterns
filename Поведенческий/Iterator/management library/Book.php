<?php

class Book
{
    private string $title;
    private string $author;
    private int $year;

    public function __construct(string $title, string $author, int $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function __toString(): string
    {
        return "{$this->title} by {$this->author} ({$this->year})";
    }
}

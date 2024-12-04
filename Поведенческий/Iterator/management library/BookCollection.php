<?php

require_once 'Book.php';

class BookCollection implements IteratorAggregate
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $book): void
    {
        $this->books = array_filter($this->books, fn($b) => $b !== $book);
    }

    // Итерация в прямом порядке
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->books);
    }

    // Итерация в обратном порядке
    public function getReverseIterator(): Traversable
    {
        return new ArrayIterator(array_reverse($this->books));
    }
}

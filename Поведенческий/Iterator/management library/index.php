<?php

require_once 'BookCollection.php';

// Создаём коллекцию книг
$library = new BookCollection();

// Добавляем книги
$library->addBook(new Book("1984", "George Orwell", 1949));
$library->addBook(new Book("To Kill a Mockingbird", "Harper Lee", 1960));
$library->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925));
$library->addBook(new Book("Brave New World", "Aldous Huxley", 1932));

// Перебираем книги по порядку добавления
echo "Книги в порядке добавления:\n";
foreach ($library as $book) {
    echo $book . "\n";
}

// Перебираем книги в обратном порядке
echo "\nКниги в обратном порядке:\n";
foreach ($library->getReverseIterator() as $book) {
    echo $book . "\n";
}

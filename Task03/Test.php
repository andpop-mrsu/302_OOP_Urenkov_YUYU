<?php

require_once 'Book.php';
require_once 'BooksList.php';

function runTest()
{

    $book1 = (new Book())
        ->setTitle("PHP для начинающих")
        ->setAuthors(["Иван Иванов", "Пётр Петров"])
        ->setPublisher("Эксм")
        ->setYear(2023);

    echo $book1;

    $book2 = (new Book())
        ->setTitle("Продвинутый PHP")
        ->setAuthors(["Джон Смит"])
        ->setPublisher("O'Reilly")
        ->setYear(2021);

    echo $book2;


    $list = new BooksList();
    $list->add($book1);
    $list->add($book2);

    echo "Всего книг: " . $list->count() . "\n";

    $fileName = "books.txt";
    $list->store($fileName);
    echo "Список книг сохранён в файл.\n";

    $newList = new BooksList();
    $newList->load($fileName);
    echo "Список книг загружен из файла.\n";
    echo "Всего книг после загрузки: " . $newList->count() . "\n";

    echo "Первая книга из загруженного списка:\n";
    echo $newList->get(0);
}

?>
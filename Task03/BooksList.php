<?php

class BooksList
{
    private $books = [];

    public function add($book)
    {
        $this->books[] = $book;
    }

    public function count()
    {
        return count($this->books);
    }

    public function get($index)
    {
        if (isset($this->books[$index])) {
            return $this->books[$index];
        }
        throw new Exception("Книга с индексом {$index} не найдена");
    }

    public function store($fileName)
    {
        file_put_contents($fileName, serialize($this->books));
    }

    public function load($fileName)
    {
        if (file_exists($fileName)) {
            $this->books = unserialize(file_get_contents($fileName));
        } else {
            throw new Exception("Файл {$fileName} не найден");
        }
    }
}

?>
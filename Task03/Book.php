<?php

class Book
{
    private static $idCounter = 1;
    private $id;
    private $title;
    private $authors;
    private $publisher;
    private $year;

    public function __construct($title = "", $authors = [], $publisher = "", $year = 0)
    {
        $this->id = self::$idCounter++;
        $this->title = $title;
        $this->authors = $authors;
        $this->publisher = $publisher;
        $this->year = $year;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    public function getAuthors()
    {
        return $this->authors;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function __toString()
    {
        $result = "Id: {$this->id}\n";
        $result .= "Название: {$this->title}\n";
        foreach ($this->authors as $index => $author) {
            $result .= "Автор" . ($index + 1) . ": {$author}\n";
        }
        $result .= "Издательство: {$this->publisher}\n";
        $result .= "Год: {$this->year}\n";
        return $result;
    }
}

?>
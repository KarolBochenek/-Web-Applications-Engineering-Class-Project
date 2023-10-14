<?php

class Item {
    private $title;
    private $description;
    private $author_name;
    private $genre;
    private $image;
    private $id;
    private $pages;
    private $publisher;
    private $isbn;
    private $condition;

    public function __construct($title, $description,$image,$genre, $author_name, $pages
        , $publisher, $isbn, $condition, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author_name = $author_name;
        $this->genre = $genre;
        $this->image = $image;
        $this->id = $id;
        $this->pages = $pages;
        $this->publisher = $publisher;
        $this->isbn = $isbn;
        $this->condition = $condition;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): ?string
    {
        return $this->author_name;
    }
    public function getPages(): ?int
    {
        return $this->pages;
    }
    public function getPublisher(): ?string
    {
        return $this->publisher;
    }
    public function getISBN(): ?string
    {
        return $this->isbn;
    }
    public function getCondition(): ?string
    {
        return $this->condition;
    }
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}
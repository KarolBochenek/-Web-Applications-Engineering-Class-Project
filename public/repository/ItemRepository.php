<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Item.php';

class ItemRepository extends Repository
{

    public function getItem(int $id): ?Item
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.items WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($item == false) {
            return null;
        }

        return new Item(
            $item['title'],
            $item['description'],
            $item['image']
        );
    }

    public function additem(Item $item): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO items (title, description, image)
            VALUES (?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $item->getTitle(),
            $item->getDescription(),
            $item->getImage(),
        ]);
    }

    public function getItems(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM items;
        ');
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $item) {
            $result[] = new Item(
                $item['title'],
                $item['description'],
                $item['image'],
                $item['id']
            );
        }

        return $result;
    }
    //TODO get item by title
}
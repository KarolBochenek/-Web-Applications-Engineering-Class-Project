<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Item.php';

class ItemRepository extends Repository
{

    public function getItem(int $id): ?Item
    {
        $stmt = $this->database->connect()->prepare('
SELECT pi.item_id, pi.title, pi.description, pi.genre, pi.image, an.name, bd.pages, bd.publisher, bd.isbn, bd.condition
FROM public.items pi
         LEFT JOIN public.authors an ON pi.author_id = an.author_id
         LEFT JOIN public.books_details bd ON pi.item_id = bd.book_id
WHERE pi.item_id = :id;
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
            $item['image'],
            $item['genre'],
            $item['name'],
            $item['pages'],
            $item['publisher'],
            $item['isbn'],
            $item['condition'],
            $item['item_id']
        );
    }

    public function additem(Item $item): void
    {
        $pdo = $this->database->connect();
    try{
        $pdo->beginTransaction();
        $title = $item->getTitle();
        $description =   $item->getDescription();
        $image = $item ->getImage();
        $genre = $item->getGenre();
        $authorName = $item->getAuthor();

        //echo "title: " . $title." descrption: ".$description." image ".$image." genre ".$genre." author ".$authorName;
        $stmt = $pdo->prepare('SELECT author_id FROM authors WHERE name = :author');
        $stmt->bindParam(':author', $authorName, PDO::PARAM_STR);
        $stmt->execute();
        $author = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$author) {
            $stmt = $pdo->prepare('INSERT INTO authors (name) VALUES (:author)');
            $stmt->bindParam(':author', $authorName, PDO::PARAM_STR);
            $stmt->execute();

            $authorId = $pdo->lastInsertId();
        }else {
            $authorId = $author['author_id'];
        }
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO items (title, description, image, genre, author_id)
            VALUES (:title, :description, :image, :genre, :author_id)
            RETURNING item_id
        ');

        //TODO you should get this value from logged user session
        //$assignedById = 1;
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
        $stmt->bindParam(':author_id', $authorId, PDO::PARAM_INT);

        $stmt->execute();

        $bookId = $stmt->fetchColumn();
        $stmt = $pdo->prepare('INSERT INTO books_authors (book_id, author_id) VALUES (:book_id, :author_id)');
        $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
        $stmt->bindParam(':author_id', $authorId, PDO::PARAM_INT);
        $stmt->execute();

        // Zatwierdzenie zmian w transakcji
        $pages = $item->getPages();
        $publisher = $item->getPublisher();
        $isbn = $item->getISBN();
        $condition = $item->getCondition();
        $stmt = $pdo->prepare('
            INSERT INTO books_details (book_id, pages, publisher, isbn, condition)
            VALUES (:book_id, :pages, :publisher, :isbn, :condition)
        ');
        $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
        $stmt->bindParam(':pages', $pages, PDO::PARAM_INT);
        $stmt->bindParam(':publisher', $publisher, PDO::PARAM_STR);
        $stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);
        $stmt->bindParam(':condition', $condition, PDO::PARAM_STR);
        $stmt->execute();
        $pdo->commit();

    } catch (\Exception $e) {
    // Wycofanie zmian w transakcji w przypadku błędu
        $pdo->rollBack();
        throw $e;  // Rzucenie wyjątku dalej, aby móc go obsłużyć w kodzie wywołującym
}
    }

    public function getItems(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
        SELECT pi.item_id, pi.title, pi.description, pi.genre, pi.image, an.name, bd.pages, bd.publisher, bd.isbn, bd.condition
        FROM public.items pi
        LEFT JOIN public.authors an ON pi.author_id = an.author_id
        LEFT JOIN public.books_details bd ON pi.item_id = bd.book_id
        ORDER BY pi.item_id desc
        ');
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $item) {
            $result[] = new Item(
                $item['title'],
                $item['description'],
                $item['image'],
                $item['genre'],
                $item['name'],
                $item['pages'],
                $item['publisher'],
                $item['isbn'],
                $item['condition'],
                $item['item_id']
            );
        }

        return $result;
    }
    //TODO get item by title
}
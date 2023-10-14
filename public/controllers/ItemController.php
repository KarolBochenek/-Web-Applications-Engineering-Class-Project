<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Item.php';
require_once __DIR__ . '/../repository/ItemRepository.php';

class ItemController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg','image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/img/uploads/';

    private $message = [];
    public function __construct()
    {
        parent::__construct();
        $this->ItemRepository = new ItemRepository();
    }
    public function items()
    {
        if ($this->isLoggedIn()) {

            $items = $this->ItemRepository->getItems();
            $this->render('items', ['items' => $items]);

        }
        else
        {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
        //$items = $this->ItemRepository->getItems();
        //$this->render('items', ['items' => $items]);
    }
    public function addItem()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            // TODO create new project object and save it in database
            $item = new Item($_POST['title'], $_POST['description'], $_FILES['file']['name'],$_POST['genre'],$_POST['author']
                ,$_POST['pages'],$_POST['publisher'],$_POST['ISBN'],$_POST['condition']);
            $this->ItemRepository->additem($item);

            return $this->render('items', [
                'messages' => $this->message,
                'items' => $this->ItemRepository->getItems()
            ]);
        }
        return $this->render('additem', ['messages' => $this->message]);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}

<?php


require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController{
    private $userRepository;
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    public function login()
    {
        if ($this->isLoggedIn()) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/items");
        } else {


            if (!$this->isPost()) {
                return $this->render('login');
            }

            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userRepository->getUser($email);

            $passwordMatches = password_verify($password, $user->getPassword());

            if (!$user) {
                return $this->render('login', ['messages' => ['User not found!']]);
            }

            if ($user->getEmail() !== $email) {
                return $this->render('login', ['messages' => ['User with this email not exist!']]);
            }

            if (!$passwordMatches) {
                return $this->render('login', ['messages' => ['Wrong password!']]);
            }
            session_start();
            $_SESSION['user'] = [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'name' => $user->getName(),
                'surname' => $user->getSurname(),
            ];

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/items");
        }
    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        unset($_SESSION['user']);
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }

    public function register()
    {
        if (!$this->isLoggedIn()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        //$phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        //TODO try to use better hash function
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = new User($email, $hashedPassword, $name, $surname);
        //$user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
}
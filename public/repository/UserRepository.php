<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';
class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users  WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }
    public function addUser(User $user)
    {
        $database = $this->database->connect();

        try {
            $stmt = $database->prepare('
                INSERT INTO public.users (email, password)
                VALUES (?, ?)
                RETURNING id
            ');

            $email = $user->getEmail();
            $password = $user->getPassword();

            $stmt->execute([$email, $password]);

            $userId = $stmt->fetchColumn();

            $stmt = $database->prepare('
                INSERT INTO public.user_details (user_id, name, lastname)
                VALUES (?, ?, ?)
            ');

            $name = $user->getName();
            $lastname = $user->getLastname();

            $stmt->execute([$userId, $name, $lastname]);
        } catch (PDOException $e) {
            die("Błąd podczas dodawania użytkownika do bazy danych: " . $e->getMessage());
        }
    }
}
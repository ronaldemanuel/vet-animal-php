<?php

require_once "./src/infrastructure/persistence/Connection.php";
require_once "./src/models/User.class.php";
use PDO;

class UserRepository extends Repository
{
    private PDO $conn;
    
    function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function index(): array
    {
        $sql = "SELECT * FROM users;";
        $stmt = $this->conn->query($sql);

        return $this->hydrateList($stmt);
    }

    public function store(String $name, String $email, String $password): bool
    {
        $sql = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => $password,
        ]);
    }

    public function findByEmail(String $email): String
    {
        $sql = "SELECT * FROM users WHERE email = :email;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return sizeof($result) > 0 ? $result[0] : NULL;
    }
}
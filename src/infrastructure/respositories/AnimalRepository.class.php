<?php

require_once "./Repository.php";
require_once "./src/models/User.class.php";

class AnimalRepository extends Repository
{
    function __construct(PDO $conn)
    {
        parent::__construct($conn);
    }

    public function index(): array
    {
        $sql = "SELECT * FROM animals";
        $stmt = $this->conn->query($sql);

        return $this->hydrateList($stmt);
    }

    public function store(String $name, String $race, Int $age, Int $userId): bool
    {
        $sql = "INSERT INTO animals (name, race, age, user_id) VALUES (:name, :race, :age, :user_id);";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':name' => $name,
            ':race' => $race,
            ':age' => $age, PDO::PARAM_INT,
            ':user_id' => $userId, PDO::PARAM_INT,
        ]);
    }

    public function update(Int $id, String $name, String $race, Int $age)
    {
        $sql = "UPDATE animals SET name = :name, race = :race, age WHERE id = :id;";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':id' => $id, PDO::PARAM_INT,
            ':name' => $name,
            ':race' => $race,
            ':age' => $age, PDO::PARAM_INT,
        ]);
    }

    public function destroy(Int $id): bool
    {
        $sql = "DELETE FROM animals WHERE id = :id;";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':id' => $id, PDO::PARAM_INT]);
    }
}
<?php

namespace App\Vet\Infrastructure\Repositories;
use App\Vet\Models\User;
use PDO;

abstract class Repository
{
    protected PDO $conn;

    function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    protected function hydrateList(\PDOStatement $stmt): array
    {
        $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $list = [];

        foreach ($dataList as $data) {
            $list[] = new User(
                $data['id'],
                $data['name'],
                $data['email'],
            );
        }

        return $list;
    }
}
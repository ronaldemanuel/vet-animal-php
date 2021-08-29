<?php

class Connection
{
    public static function getConnection()
    {
        $user = 'root';
        $pass = '';
        return new PDO("mysql:host=127.0.0.1;dbname=vet_animal", $user, $pass);
    }
}
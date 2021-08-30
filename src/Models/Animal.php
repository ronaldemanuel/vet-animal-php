<?php

namespace App\Vet\Models;
use App\Vet\Models\User;

class Animal {
    private String $name;
    private String $race;
    private Int $age;
    private User $owner;

    function  __construct(String $name, String $race, Int $age, User $owner)
    {
        $this->name = $name;
        $this->race = $race;
        $this->age = $age;
        $this->owner = $owner;
    }

    // Name
    public function getName(): String
    {
        return $this->name;
    }

    public function setName(String $name): String
    {
        $this->name = $name;
        return $this->name;
    }

    // Race
    public function getRace(): String
    {
        return $this->race;
    }

    public function setRace(String $race): String
    {
        $this->race = $race;
        return $this->race;
    }

    // Age
    public function getAge(): Int
    {
        return $this->age;
    }

    public function setAge(Int $age): Int
    {
        $this->age = $age;
        return $this->age;
    }

    // User
    public function getUser(): User
    {
        return $this->user;
    }
}
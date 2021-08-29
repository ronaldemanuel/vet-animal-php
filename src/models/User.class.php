<?php

use phpseclib3\Common\Functions\Strings;

class User 
{
    private Int $id;
    private String $name;
    private String $email;

    function __contruct(Int $id, String $name, String $email) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    //  Id
    public function getId(): int
    {
        return $this->id;
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

    // Email
    public function getEmail(): String
    {
        return $this->email;
    }

    public function setEmail(String $email): String
    {
        $this->email = $email;
        return $this->email;
    }
}
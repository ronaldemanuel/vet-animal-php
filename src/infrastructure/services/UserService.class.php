<?php

require_once "./src/infrastructure/respositories/UserRepository.class.php";
require_once "./src/models/User.class.php";

class UserService
{
    private UserRepository $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function listUsers(): array
    {
        try {
            $list = $this->userRepository->index();
            return array_map(function ($e) {
                return new User($e['id'], $e['name'], $e['email']);
            }, $list);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function createUser(String $name, String $email, String $password): bool
    {
        try {
            return $this->userRepository->store($name, $email, password_hash($password, PASSWORD_DEFAULT));
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function login(String $email, String $password)
    {
        try {
            $fetch = $this->userRepository->findByEmail($email);
            if (is_null($fetch)) {
                throw new Exception("User not found");
            }
            if (!password_verify($password, $fetch['password'])) {
                throw new Exception("Invalid password");
            }
            $user = new User($fetch['id'], $fetch['name'], $fetch['email']);
            return $user;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
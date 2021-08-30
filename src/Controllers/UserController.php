<?php

namespace App\Vet\Controllers;

use App\Vet\Infrastructure\Persistence\Connection;
use App\Vet\Infrastructure\Repositories\UserRepository;
use App\Vet\Infrastructure\Services\UserService;

use Exception;

require_once 'autoloader.php';
class UserController
{
    private UserService $userService;

    function __construct()
    {
        try {
            $this->userService = new UserService(new UserRepository(Connection::getConnection()));
            var_dump($this->userService);
            echo "jorge";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function store() 
    {
        $mane = '123';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!isset($name) || !isset($email) || !isset($password)) {
            require_once 'index.php';
        } else {
            $res = $this->userService->createUser($name, $email, $password);
            if(!$res) {
                require_once 'src/Views/register.php';
            } else {
                require_once 'src/Views/login.php';
            }
        }
    }

    // public function login()
    // {
    //$email = $_POST['email'];
   // $password = $_POST['password'];

    //     if (!isset($email) || !isset($password)) {
    //         require_once 'src/Views/register.php';
    //     } else {
    //         $res = $this->userService->login($email, $password);
    //         if (is_bool($res)) {
    //             require_once 'src/Views/login.php';
    //         } else {
    //             $_SESSION['loggedUser'] = array('id' => $res->getId(), 'name' => $res->getName(), 'email' => $res->getEmail());
    //             require_once 'src/Views/listAnimals.php';
    //         }
    //     }
    // }


    // public function logout()
    // {
    //     session_destroy();
    //     header('Location: ?view=login');
    // }

    public function deuBom()
    {
        echo "deu bom";
    }
}
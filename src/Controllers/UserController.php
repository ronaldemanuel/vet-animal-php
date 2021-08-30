<?php

namespace App\Vet\Controllers;

require_once 'autoloader.php';

use App\Vet\Services\UserService;
use App\Vet\Persistence\Connection;
use App\Vet\Repositories\UserRepository;
use Exception;

class UserController
{
    private UserService $userService;

    function __construct()
    {
        try {
            $this->userService = new UserService(new UserRepository(Connection::getConnection()));
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        echo "jorge";
    }

    // public function store() 
    // {
    //     echo "cleyton";
    //     exit();
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     if (!isset($name) || !isset($email) || !isset($password)) {
    //         require_once 'index.php';
    //     } else {
    //         $res = $this->userService->createUser($name, $email, $password);
    //         if(!$res) {
    //             require_once 'src/Views/register.php';
    //         } else {
    //             require_once 'src/Views/login.php';
    //         }
    //     }
    // }

    // public function login()
    // {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

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

$userController = new UserController();
$userController->deuBom();
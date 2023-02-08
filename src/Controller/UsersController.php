<?php

namespace App\Controller;

use Exception;

class UsersController extends AppController
{
    public function login(){
        $name = $this->getRequest()->getData("name");
        $password = $this->getRequest()->getData("password");
        if (!empty($name) && !empty($password)) {
            /** @var Database $db */
            try {
                $stmt = $db->query('SELECT * FROM users WHERE name = :name and password = :password',
                    [
                        'name' => $_POST['name'],
                        'password' => $_POST['password'],
                    ]);
                $user = $stmt->fetch();
                if ($user) {
                    $_SESSION['user'] = $user;
                }
            } catch (Exception $e) {
                $e->getMessage();
            }


        }
        header('Location: /index');
        exit();
    }

    public function logout(){
        $_SESSION = [];
        session_destroy();
        header('Location: /login');
    }
}

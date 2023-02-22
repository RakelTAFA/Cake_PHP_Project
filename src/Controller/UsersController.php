<?php

namespace App\Controller;

use Exception;

class UsersController extends AppController
{
    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}

<?php

namespace App\Controller;

class TicketsController extends AppController
{
    public function index(){
        try {
            $this->loadComponent('Paginator');
        } catch (\Exception $e) {
        }
        $tickets = $this->Paginator->paginate($this->Tickets->find());
        $this-> set(compact('tickets'));
    }
    public function listing(){

    }
    public function edit(){

    }
    public function add(){

    }
    public function delete(){

    }
}

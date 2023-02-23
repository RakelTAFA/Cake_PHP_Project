<?php

namespace App\Controller;

class TicketsController extends AppController
{
    public function index(){
        $this->loadComponent('Paginator');
        $tickets = $this->Paginator->paginate($this->Tickets->find());
        $this->set(compact('tickets'));
    }
    public function listing(){

    }
    public function edit(){

    }
    public function add(){
        $ticket = $this->Tickets->newEmptyEntity();


        if ($this->request->is('post'))
        {
            // On récupère toutes les données postées !

            $ticket = $this->Tickets->patchEntity($ticket, $this->request->getData());

            if ($this->Tickets->save($ticket))
            {
                $this->Flash->success('Tâche ajoutée !');
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error('Impossible d\'ajouter cette tâche !');
        }

        $this->set(compact('ticket'));

    }
    public function delete(){

    }
}

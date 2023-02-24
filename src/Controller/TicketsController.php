<?php

namespace App\Controller;

class TicketsController extends AppController
{
    public function index(){
        $tickets = $this->Tickets->find('all')->limit(5)->order(['id' => 'DESC']);
        $this->set(compact('tickets'));
    }
    public function listing(){
        $tickets = $this->Tickets->find('all');
        $this->set(compact('tickets'));
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
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Impossible d\'ajouter cette tâche !');
        }

        $this->set(compact('ticket'));

    }
    public function delete($id){
        $ticket = $this->Tickets->get($id);
        if ($this->Tickets->delete($ticket)) {
            $this->Flash->success(__('The ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

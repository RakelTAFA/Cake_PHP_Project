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
    public function edit($id)
    {
        // Load the Tickets table
        $this->loadModel('Tickets');

        // Get the ticket with ID 1
        $ticket = $this->Tickets->find()
            ->where(['id' => $id])
            ->firstOrFail();


        // Check if the request is a POST request
        if ($this->request->is(['post', 'put'])) {

            // Patch the ticket entity with the request data
            $this->Tickets->patchEntity($ticket, $this->request->getData());

            // Save the changes to the ticket
            if ($this->Tickets->save($ticket)) {
                $this->Flash->success(__('The ticket has been updated.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to update the ticket.'));
            }
        }

        // Pass the ticket data to the view
        $this->set(compact('ticket'));
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

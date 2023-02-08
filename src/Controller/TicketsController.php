<?php

namespace App\Controller;

class TicketsController extends AppController
{
    public function listing(){

    }
    public function edit(){

    }
    public function add(){
        $title = $this->getRequest()->getData('title');
        $description = $this->getRequest()->getData('description');
        $level = $this->getRequest()->getData('level');

        if (!empty($title)&&!empty($description)&&!empty($level)) {
            /** @var Database $db */

            $title = htmlentities($title);
            $description = htmlentities($description);

            $db->save("tickets",["user_id" => $_SESSION['user']['id'],"title"=>$title,"description"=>$description,"level"=>$level]);


        }

        header('Location: /todo-list');
        exit();
    }
    public function delete(){

    }
}

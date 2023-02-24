<?php

namespace App\Model\Table;

use Cake\Event\EventInterface;
use Cake\ORM\Table;

class TicketsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tickets');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

}

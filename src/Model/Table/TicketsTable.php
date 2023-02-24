<?php

namespace App\Model\Table;

use Cake\Event\EventInterface;
use Cake\ORM\Table;

class TicketsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->belongsTo('Users');
    }

    public function beforeSave(EventInterface $event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug)
        {
            //$sluggedTitle = Text::slug($entity->title);
            //$entity->slug = substr($sluggedTitle, 0, 100);
        }
    }

}

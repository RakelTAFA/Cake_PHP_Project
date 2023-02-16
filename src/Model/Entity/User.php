<?php

namespace App\Model\Entity;

class User extends \Cake\ORM\Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}

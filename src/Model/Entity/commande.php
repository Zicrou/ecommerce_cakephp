<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Commande extends Entity
{
    protected $_accesible = [ 
        '*' => true,
        'id' => false
    ];
}
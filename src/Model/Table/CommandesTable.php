<?php

namespace App\Model\Table;

use Cake\Event\EventInterface;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;

class CommandesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Produits')
        ->setForeignKey('produit_id');
        
    }

//    public function beforeSave(EventInterface $event, $entity, $options)
//    {
//        if ($entity->isNew() && !$entity->slug) {
//            $sluggedNom = Text::slug($entity->nom);
//            $entity->slug = substr($sluggedNom, 0, 191);
//        }
//    }
//
//    public function validationDefault(Validator $validator): Validator
//    {
//        $validator
//            ->notEmptyString("nom", "Ce champ ne peut etre vide.")
//            ->minLength("nom", 5, "5 caracteres au minimu!")
//            ->maxLength("nom", 255)
//
//            ->notEmptyString("description")
//            ->minLength("nom", 10, "10 caracteres au minimu!");
//
//            return $validator;
//    }
} 
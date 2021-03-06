<?php
namespace App\Model\Table;

use App\Model\Entity\Activity;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activities Model
 *
 * @property \Cake\ORM\Association\HasMany $Brands
 * @property \Cake\ORM\Association\HasMany $Offers
 */
class ActivitiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('activities');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Brands', [
            'foreignKey' => 'activity_id'
        ]);
        $this->hasMany('Offers', [
            'foreignKey' => 'activity_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');
            
        $validator
            ->add('counter', 'valid', ['rule' => 'numeric'])
            ->requirePresence('counter', 'create')
            ->notEmpty('counter');

        return $validator;
    }
}

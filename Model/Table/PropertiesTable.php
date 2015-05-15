<?php
namespace App\Model\Table;

use App\Model\Entity\Property;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 */
class PropertiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('properties');
        $this->displayField('propertiesid');
        $this->primaryKey('propertiesid');
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
            ->add('propertiesid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('propertiesid', 'create')
            ->add('occid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('occid', 'create')
            ->notEmpty('occid')
            ->add('landlordid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('landlordid', 'create')
            ->notEmpty('landlordid')
            ->add('standardid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('standardid', 'create')
            ->notEmpty('standardid')
            ->allowEmpty('propertymanager')
            ->allowEmpty('keynumber')
            ->allowEmpty('buildingclass')
            ->allowEmpty('occupancypermit')
            ->requirePresence('address1', 'create')
            ->notEmpty('address1')
            ->allowEmpty('address2')
            ->allowEmpty('notes')
            ->add('duedate', 'valid', ['rule' => 'date'])
            ->allowEmpty('duedate')
            ->allowEmpty('propertystatus');

        return $validator;
    }
}

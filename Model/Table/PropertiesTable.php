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
        $this->displayField('address1');
        $this->primaryKey('propertiesid');
		
		$this->hasOne('agencyoffice', ['className' => 'agencyoffice', 'foreignKey' => 'agencyofficeid']);
        $this->hasMany('equprop',['className' => 'equprop','foriegnKey' => 'propertiesid']);
        $this->hasMany('jobs',['className' => 'jobs','foriegnKey' => 'propertiesid']);		
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
			->add('agencyofficeid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('agencyofficeid', 'create')
            ->notEmpty('agencyofficeid')
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

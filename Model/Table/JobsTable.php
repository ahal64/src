<?php
namespace App\Model\Table;

use App\Model\Entity\Job;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 */
class JobsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('jobs');
        $this->displayField('jobdesc');
        $this->primaryKey('jobid');
		
		$this->hasOne('properties', ['className' => 'properties', 'foreignKey' => 'propertiesid']);
		$this->hasOne('equipment', ['className' => 'equipment', 'foreignKey' => 'equipid']);
		$this->hasOne('users', ['className' => 'users', 'foreignKey' => 'id']);
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
            ->add('jobid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('jobid', 'create')
            ->add('propertiesid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('propertiesid', 'create')
            ->notEmpty('propertiesid')
            ->add('equipid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('equipid', 'create')
            ->notEmpty('equipid')
            ->add('userid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('userid', 'create')
            ->notEmpty('userid')
            ->requirePresence('jobdesc', 'create')
            ->notEmpty('jobdesc')
            ->add('startdate', 'valid', ['rule' => 'date'])
            ->requirePresence('startdate', 'create')
            ->notEmpty('startdate')
            ->add('enddate', 'valid', ['rule' => 'date'])
            ->requirePresence('enddate', 'create')
            ->notEmpty('enddate');

        return $validator;
    }
}

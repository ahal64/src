<?php
namespace App\Model\Table;

use App\Model\Entity\EquProp;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EquProp Model
 */
class EquPropTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('equ_prop');
        $this->displayField('id');
        $this->primaryKey('id');
		
		$this->hasOne('properties',['className' => 'properties','foriegnKey' => 'propertiesid']);
		$this->hasOne('equipment',['className' => 'equipment','foriegnKey' => 'equipid']);
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
            ->allowEmpty('id', 'create')
            ->add('equipid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('equipid', 'create')
            ->notEmpty('equipid')
            ->add('propertiesid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('propertiesid', 'create')
            ->notEmpty('propertiesid')
            ->add('duedate', 'valid', ['rule' => 'date'])
            ->allowEmpty('duedate');

        return $validator;
    }
}

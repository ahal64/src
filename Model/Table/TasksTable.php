<?php
namespace App\Model\Table;

use App\Model\Entity\Task;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tasks Model
 */
class TasksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tasks');
        $this->displayField('name');
        $this->primaryKey('tasksid');
		
		$this->hasOne('standard', ['className' => 'standard', 'foreignKey' => 'standardid']);
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
            ->add('tasksid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tasksid', 'create')
            ->add('standardid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('standardid', 'create')
            ->notEmpty('standardid')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('duedate', 'valid', ['rule' => 'date'])
            ->allowEmpty('duedate')
            ->allowEmpty('status');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Standard;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Standards Model
 */
class StandardsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('standards');
        $this->displayField('name');
        $this->primaryKey('standardid');
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
            ->add('standardid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('standardid', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->allowEmpty('description')
            ->allowEmpty('notes')
            ->allowEmpty('actionrequired')
            ->allowEmpty('passorfail')
            ->allowEmpty('extracomments');

        return $validator;
    }
}

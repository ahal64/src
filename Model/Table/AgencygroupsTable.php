<?php
namespace App\Model\Table;

use App\Model\Entity\Agencygroup;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencygroups Model
 */
class AgencygroupsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('agencygroups');
        $this->displayField('agencygroupid');
        $this->primaryKey('agencygroupid');
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
            ->add('agencygroupid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('agencygroupid', 'create')
            ->requirePresence('groupname', 'create')
            ->notEmpty('groupname');

        return $validator;
    }
}

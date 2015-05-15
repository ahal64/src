<?php
namespace App\Model\Table;

use App\Model\Entity\Agencystaff;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencystaffs Model
 */
class AgencystaffsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('agencystaffs');
        $this->displayField('agencystaffid');
        $this->primaryKey('agencystaffid');
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
            ->add('agencystaffid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('agencystaffid', 'create')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname')
            ->allowEmpty('mobile');

        return $validator;
    }
}

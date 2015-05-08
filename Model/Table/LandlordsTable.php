<?php
namespace App\Model\Table;

use App\Model\Entity\Landlord;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Landlords Model
 */
class LandlordsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('landlords');
        $this->displayField('landlordid');
        $this->primaryKey('landlordid');
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
            ->add('landlordid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('landlordid', 'create')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname')
            ->allowEmpty('address1')
            ->allowEmpty('address2')
            ->add('mobile', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('mobile')
            ->add('homephone', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('homephone')
            ->add('officephone', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('officephone')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}

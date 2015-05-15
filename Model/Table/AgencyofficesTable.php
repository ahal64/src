<?php
namespace App\Model\Table;

use App\Model\Entity\Agencyoffice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencyoffices Model
 */
class AgencyofficesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('agencyoffices');
        $this->displayField('agencyofficeid');
        $this->primaryKey('agencyofficeid');
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
            ->add('agencyofficeid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('agencyofficeid', 'create')
            ->requirePresence('agencyname', 'create')
            ->notEmpty('agencyname')
            ->requirePresence('customercode', 'create')
            ->notEmpty('customercode')
            ->requirePresence('abn', 'create')
            ->notEmpty('abn')
            ->allowEmpty('phone')
            ->allowEmpty('fax')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->allowEmpty('website')
            ->allowEmpty('address1')
            ->allowEmpty('address2')
            ->allowEmpty('suburb')
            ->allowEmpty('postcode')
            ->add('agencygroupid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('agencygroupid')
            ->add('landlordid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('landlordid')
            ->add('agencystaffid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('agencystaffid');

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

<?php
namespace App\Model\Table;

use App\Model\Entity\Occupant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Occupants Model
 */
class OccupantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('occupants');
        $this->displayField('occid');
        $this->primaryKey('occid');
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
            ->add('occid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('occid', 'create')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname')
            ->requirePresence('address1', 'create')
            ->notEmpty('address1')
            ->requirePresence('address2', 'create')
            ->notEmpty('address2')
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile')
            ->allowEmpty('officephone')
            ->allowEmpty('homephone')
            ->add('otherphone', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('otherphone');

        return $validator;
    }
}

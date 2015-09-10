<?php
namespace App\Model\Table;

use App\Model\Entity\Equipment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipment Model
 */
class EquipmentTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('equipment');
        $this->displayField('name');
        $this->primaryKey('equipid');
		
		$this->hasOne('equipmenttype', ['className' => 'equipmenttype', 'foreignKey' => 'eqtypeid']);
        
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
            ->add('equipid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('equipid', 'create')
            ->add('eqtypeid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('eqtypeid', 'create')
            ->notEmpty('eqtypeid')
            ->add('standardid', 'valid', ['rule' => 'numeric'])
            ->requirePresence('standardid', 'create')
            ->notEmpty('standardid')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('notes', 'create')
            ->notEmpty('notes')
            ->add('installationdate', 'valid', ['rule' => 'date'])
            ->requirePresence('installationdate', 'create')
            ->notEmpty('installationdate')
            ->requirePresence('existing_or_required', 'create')
            ->notEmpty('existing_or_required')
            ->requirePresence('barcode', 'create')
            ->notEmpty('barcode');

        return $validator;
    }
}

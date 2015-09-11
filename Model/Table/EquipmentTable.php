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
        $this->hasMany('standards', ['className' => 'standards', 'foreignKey' => 'equipid']);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')         
            ->allowEmpty('notes')
            ->add('installationdate', 'valid', ['rule' => 'date'])          
            ->allowEmpty('installationdate')
            ->allowEmpty('existing_or_required')
            ->allowEmpty('barcode');

        return $validator;
    }
}

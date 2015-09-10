<?php
namespace App\Model\Table;

use App\Model\Entity\Equipmenttype;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipmenttypes Model
 */
class EquipmenttypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('equipmenttypes');
        $this->displayField('name');
        $this->primaryKey('eqtypeid');
		
		//foriegn key relationships
		$this->hasMany('equipment', ['className' => 'equipment', 'foreignKey' => 'eqtypeid']);
        
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
            ->add('eqtypeid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('eqtypeid', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}

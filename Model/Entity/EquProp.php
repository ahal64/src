<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EquProp Entity.
 */
class EquProp extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'equipid' => true,
        'propertiesid' => true,
        'duedate' => true,
    ];
}

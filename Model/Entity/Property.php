<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity.
 */
class Property extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
	    'agencyofficeid' => true,
        'standardid' => true,
        'propertymanager' => true,
        'keynumber' => true,
        'buildingclass' => true,
        'occupancypermit' => true,
        'address1' => true,
        'address2' => true,
        'notes' => true,
        'duedate' => true,
        'propertystatus' => true,
    ];
}

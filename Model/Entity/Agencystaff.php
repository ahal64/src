<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agencystaff Entity.
 */
class Agencystaff extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'mobile' => true,
		'agencyofficeid' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agencygroup Entity.
 */
class Agencygroup extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'groupname' => true,
    ];
}

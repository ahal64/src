<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Landlord Entity.
 */
class Landlord extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'address1' => true,
        'address2' => true,
        'mobile' => true,
        'homephone' => true,
        'officephone' => true,
        'email' => true,
    ];
}

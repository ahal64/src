<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agencyoffice Entity.
 */
class Agencyoffice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'agencyname' => true,
        'customercode' => true,
        'abn' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'website' => true,
        'address1' => true,
        'address2' => true,
        'suburb' => true,
        'postcode' => true,
        'agencygroupid' => true,
    ];
}

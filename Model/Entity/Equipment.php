<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipment Entity.
 */
class Equipment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'eqtypeid' => true,
        'name' => true,
        'notes' => true,
        'installationdate' => true,
        'existing_or_required' => true,
        'barcode' => true,
    ];
}

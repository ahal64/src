<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Standard Entity.
 */
class Standard extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
	    'equipid' => true,
        'name' => true,
        'description' => true,
        'notes' => true,
        'actionrequired' => true,
        'passorfail' => true,
        'extracomments' => true,
    ];
}

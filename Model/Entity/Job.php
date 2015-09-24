<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity.
 */
class Job extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'propertiesid' => true,
        'equipid' => true,
        'userid' => true,
        'jobdesc' => true,
        'startdate' => true,
        'enddate' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Apply Entity.
 */
class Apply extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'modeuse_id' => true,
        'offer_id' => true,
        'message' => true,
        'viewed' => true,
        'modeus' => true,
        'offer' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'offer_id' => true,
        'content' => true,
        'from_who' => true,
        'viewed' => true,
        'answered' => true,
        'brand' => true,
        'modeus' => true,
    ];
}

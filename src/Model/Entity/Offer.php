<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offer Entity.
 */
class Offer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'uniquid' => true,
        'brand_id' => true,
        'type_id' => true,
        'date_begin' => true,
        'date_end' => true,
        'title' => true,
        'description' => true,
        'lifestyle' => true,
        'personnality' => true,
        'exchange' => true,
        'finished' => true,
        'modeuse_id' => true,
        'brand' => true,
        'type' => true,
        'modeus' => true,
        'applies' => true,
        'messages' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'bio' => true,
        'website' => true,
        'picture' => true,
        'type' => true,
        'password' => true,
        'brands' => true,
        'modeuses' => true,
    ];
}

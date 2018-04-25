<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Telephone Entity.
 */
class Telephone extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'telephone' => true,
        'id_contact' => true,
    ];
}

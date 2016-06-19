<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monture Entity.
 *
 * @property int $id
 * @property int $personnages_id
 * @property \App\Model\Entity\Personnage $personnage
 * @property string $nom
 * @property int $pv
 * @property int $pv_max
 * @property string $attaque
 * @property string $special
 */
class Monture extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}

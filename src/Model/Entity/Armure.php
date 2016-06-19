<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Armure Entity.
 *
 * @property int $id
 * @property int $personnages_id
 * @property \App\Model\Entity\Personnage $personnage
 * @property string $emplacement
 * @property string $nom
 * @property float $indice
 * @property int $charge
 * @property int $charge_max
 * @property int $dura
 */
class Armure extends Entity
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

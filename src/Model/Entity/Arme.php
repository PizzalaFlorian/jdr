<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arme Entity.
 *
 * @property int $personnages_id
 * @property \App\Model\Entity\Personnage $personnage
 * @property int $id
 * @property int $cdt
 * @property int $dura
 * @property string $nom
 * @property string $degat
 * @property string $munition
 * @property string $composante
 * @property string $porte
 */
class Arme extends Entity
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

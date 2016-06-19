<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personnage Entity.
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $race
 * @property string $type_campagne
 * @property int $age
 * @property string $profession
 * @property int $physique
 * @property int $adresse
 * @property int $social
 * @property int $esprit
 * @property int $pv
 * @property int $pv_max
 * @property int $pm
 * @property int $pa
 * @property int $pi
 * @property int $ca
 * @property int $destin
 * @property string $archetype
 * @property int $gold
 * @property int $argent
 * @property int $bronze
 * @property int $niveau
 * @property int $experience
 * @property int $pm_max
 */
class Personnage extends Entity
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

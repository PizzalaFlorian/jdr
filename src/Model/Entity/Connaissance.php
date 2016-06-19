<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Connaissance Entity.
 *
 * @property int $id
 * @property int $competences_id
 * @property \App\Model\Entity\Competence $competence
 * @property int $personnages_id
 * @property \App\Model\Entity\Personnage $personnage
 * @property int $bonnus
 */
class Connaissance extends Entity
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

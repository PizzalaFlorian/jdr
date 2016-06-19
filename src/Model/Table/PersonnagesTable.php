<?php
namespace App\Model\Table;

use App\Model\Entity\Personnage;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personnages Model
 *
 */
class PersonnagesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('personnages');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nom');

        $validator
            ->allowEmpty('prenom');

        $validator
            ->allowEmpty('race');

        $validator
            ->allowEmpty('type_campagne');

        $validator
            ->integer('age')
            ->allowEmpty('age');

        $validator
            ->allowEmpty('profession');

        $validator
            ->integer('physique')
            ->allowEmpty('physique');

        $validator
            ->integer('adresse')
            ->allowEmpty('adresse');

        $validator
            ->integer('social')
            ->allowEmpty('social');

        $validator
            ->integer('esprit')
            ->allowEmpty('esprit');

        $validator
            ->integer('pv')
            ->allowEmpty('pv');

        $validator
            ->integer('pv_max')
            ->allowEmpty('pv_max');

        $validator
            ->integer('pm')
            ->allowEmpty('pm');

        $validator
            ->integer('pa')
            ->allowEmpty('pa');

        $validator
            ->integer('pi')
            ->allowEmpty('pi');

        $validator
            ->integer('ca')
            ->allowEmpty('ca');

        $validator
            ->integer('destin')
            ->allowEmpty('destin');

        $validator
            ->allowEmpty('archetype');

        $validator
            ->integer('gold')
            ->allowEmpty('gold');

        $validator
            ->integer('argent')
            ->allowEmpty('argent');

        $validator
            ->integer('bronze')
            ->allowEmpty('bronze');

        $validator
            ->integer('niveau')
            ->allowEmpty('niveau');

        $validator
            ->integer('experience')
            ->allowEmpty('experience');

        $validator
            ->integer('pm_max')
            ->allowEmpty('pm_max');

        return $validator;
    }
}

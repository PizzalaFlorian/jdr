<?php
namespace App\Model\Table;

use App\Model\Entity\Familier;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Familiers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Personnages
 */
class FamiliersTable extends Table
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

        $this->table('familiers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Personnages', [
            'foreignKey' => 'personnages_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('pv')
            ->allowEmpty('pv');

        $validator
            ->integer('pv_max')
            ->allowEmpty('pv_max');

        $validator
            ->allowEmpty('attaque');

        $validator
            ->allowEmpty('special');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['personnages_id'], 'Personnages'));
        return $rules;
    }
}

<?php
namespace App\Model\Table;

use App\Model\Entity\Armure;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Armures Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Personnages
 */
class ArmuresTable extends Table
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

        $this->table('armures');
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
            ->allowEmpty('emplacement');

        $validator
            ->allowEmpty('nom');

        $validator
            ->numeric('indice')
            ->allowEmpty('indice');

        $validator
            ->integer('charge')
            ->allowEmpty('charge');

        $validator
            ->integer('charge_max')
            ->allowEmpty('charge_max');

        $validator
            ->integer('dura')
            ->allowEmpty('dura');

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

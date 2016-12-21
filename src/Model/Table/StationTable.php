<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profession Model
 *
 * @method \App\Model\Entity\Profession get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profession newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profession[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profession|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profession patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profession[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profession findOrCreate($search, callable $callback = null)
 */
class StationTable extends Table
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

        $this->table('stations');
        $this->displayField('idstations');
        $this->primaryKey('idstations');
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
            ->integer('idstations')
            ->allowEmpty('idstations', 'create');

        $validator
            ->allowEmpty('station_names');

        return $validator;
    }
}

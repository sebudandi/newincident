<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Report Model
 *
 * @method \App\Model\Entity\Report get($primaryKey, $options = [])
 * @method \App\Model\Entity\Report newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Report[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Report|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Report patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Report[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Report findOrCreate($search, callable $callback = null)
 */
class IncidentTable extends Table
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

        $this->table('incident_report');
        $this->displayField('idincident_report');
        $this->primaryKey('idincident_report');
        $this->belongsTo('Person',[
            'foreignKey' => 'person_details_id',
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
            ->integer('idincident_report')
            ->allowEmpty('idincident_report', 'create');
        $validator
            ->allowEmpty('incident_name');
        $validator
            ->allowEmpty('incident_details');
      /**  $validator
            ->integer('person_details_id')
            ->requirePresence('person_details_id', 'create');
            
        $validator
            ->integer('events_idevents')
            ->requirePresence('events_idevents', 'create');
            
         $validator
            ->integer('company_details_id')
            ->requirePresence('company_details_id', 'create');
            
          $validator
            ->integer('stations_idstations')
            ->requirePresence('stations_idstations', 'create');*/
            

        return $validator;
    }
}

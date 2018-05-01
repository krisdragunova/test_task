<?php
namespace App\Model\Table;

use App\Model\Entity\Telephone;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telephones Model
 */
class TelephonesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->belongsTo('contacts');

        $this->table('telephones');
        $this->displayField('ID');
        $this->primaryKey('ID');
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
            ->add('ID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID', 'create')
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone')
            ->add('contact_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('contact_id');

        return $validator;
    }
}

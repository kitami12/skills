<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class ProgrammingsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('programmings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Abilities');
        $this->hasMany('Programmings', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    $data = $this->Programmings
    ->find()
    ->contain(['Abilities']);
    return $data;
}

}
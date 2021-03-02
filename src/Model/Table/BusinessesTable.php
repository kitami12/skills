<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class BusinessesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('businesses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Abilities');
        $this->hasMany('Businesses', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    $data = $this->Businesses
    ->find()
    ->contain(['Abilities']);
    return $data;
    }
}
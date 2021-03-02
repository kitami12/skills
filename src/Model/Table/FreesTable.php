<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class FreesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('frees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Frees', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    $data = $this->Frees
    ->find();
    return $data;
    }
}
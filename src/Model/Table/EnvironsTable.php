<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class EnvironsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('environs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Abilities');
        $this->hasMany('Environs', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    // usersテーブルの1(status)データを配列取得    
    $data = $this->Environs
    ->find()
    ->contain(['Abilities']);
    return $data;
    }
}
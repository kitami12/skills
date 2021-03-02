<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class OssesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('osses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Abilities');
        $this->hasMany('Osses', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    // usersテーブルの1(status)データを配列取得    
    $data = $this->Osses
    ->find()
    ->contain(['Abilities']);
    return $data;
    }
}
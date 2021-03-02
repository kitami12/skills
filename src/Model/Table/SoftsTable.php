<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class SoftsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('softs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Abilities');
        $this->hasMany('Softs', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view($user_id = null) {
    // usersテーブルの1(status)データを配列取得    
    $data = $this->Softs
    ->find()
    ->contain(['Abilities']);
    echo $user_id;
    return $data;
}

}

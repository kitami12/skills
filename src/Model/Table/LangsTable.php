<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class LangsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('langs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Langs', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    $data = $this->Langs
    ->find();
    return $data;
    }
}
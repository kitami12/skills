<?php
namespace App\Model\Table;
 
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class QualificationsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('qualifications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Qualifications', [
            'foreignKey' => 'user_id',
        ]);
    }

public function view() {
    $data = $this->Qualifications
    ->find();
    return $data;
}

    
}
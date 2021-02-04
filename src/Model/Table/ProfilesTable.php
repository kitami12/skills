<?php
// src/Model/Table/ProfilesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProfilesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('profiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Articles', [
            'foreignKey' => 'user_id',
        ]);
    }
}
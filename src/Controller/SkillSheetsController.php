<?php
// src/Controller/SkillsController.php

namespace App\Controller;
use Cake\ORM\TableRegistry;
class SkillSheetsController extends AppController
{
    public function initialize() {
        parent::initialize();

        $this->loadComponent('paginator');
        $this->loadComponent('Flash');
        $this->Auth->allow(['logout','add']);
        // ログインしなくてもlogoutとaddは表示できる
        $this->Users = TableRegistry::getTableLocator()->get('Users');
    }
    public function index()
    {
        parent::initialize();
    }

    
    public function view($id = null)
    {
        $users = $this->Users->get($id, [
            'contain' => ['Profiles','Programmings','Osses','Softs','Langs',
            'Qualifications','Performances','Frees','Environs','Businesses'],
        ]);

        $this->set(compact('users'));
        
    }

    public function add()
    {
        
        
        
    }

  


    public function isAuthorized($user)
{
    $action = $this->request->getParam('action');
    // add および tags アクションは、常にログインしているユーザーに許可されます。
    if (in_array($action, ['add', 'view'])) {
        return true;
    }
    return $user->user_id === $user['id'];
    }
}
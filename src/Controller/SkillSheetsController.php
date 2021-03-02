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
        $this->Softs = TableRegistry::getTableLocator()->get('Softs');
        $this->Programmings = TableRegistry::getTableLocator()->get('Programmings');
        $this->Osses = TableRegistry::getTableLocator()->get('Osses');
        $this->Langs = TableRegistry::getTableLocator()->get('Langs');
        $this->Qualifications = TableRegistry::getTableLocator()->get('Qualifications');
        $this->Performances = TableRegistry::getTableLocator()->get('Performances');
        $this->Frees = TableRegistry::getTableLocator()->get('Frees');
        $this->Environs = TableRegistry::getTableLocator()->get('Environs');
        $this->Businesses = TableRegistry::getTableLocator()->get('Businesses');


    }
    public function index()
    {
        parent::initialize();
    }

    
    public function view($user_id = null)
    {
        // $softs = $this->Softs->findById($user_id)->firstOrFail();
        $users = $this->Users->view();
        $softs = $this->Softs->view($user_id = null);
        $programmings = $this->Programmings->view();
        $osses = $this->Osses->view();
        $langs = $this->Langs->view();
        $qualifications = $this->Qualifications->view();
        $performances = $this->Performances->view();
        $frees = $this->Frees->view();
        $environs = $this->Environs->view();
        $businesses = $this->Businesses->view();


        $this->set(compact('users','softs','programmings','osses','langs',
        'qualifications','performances','frees','environs','businesses'));
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
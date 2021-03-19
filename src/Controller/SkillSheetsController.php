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
                $this->Profiles = TableRegistry::getTableLocator()->get('Profiles');
                $this->Programmings = TableRegistry::getTableLocator()->get('Programmings');
                $this->Osses = TableRegistry::getTableLocator()->get('Osses');
                $this->Softs = TableRegistry::getTableLocator()->get('Softs');
                $this->Langs = TableRegistry::getTableLocator()->get('Langs');
                $this->Qualifications = TableRegistry::getTableLocator()->get('Qualifications');
                $this->Performances = TableRegistry::getTableLocator()->get('Performances');
                $this->Frees = TableRegistry::getTableLocator()->get('Frees');
                $this->Environs = TableRegistry::getTableLocator()->get('Environs');
                $this->Businesses = TableRegistry::getTableLocator()->get('Businesses');
                // $this->Abilities = TableRegistry::getTableLocator()->get('Abilities');
            } 
            public function index() {
                parent::initialize();
            }

        
            public function view($id = null) {

                $user = $this->Users->get($id, [
                    'contain' => ['Profiles','Programmings','Osses','Softs','Langs',
                    'Qualifications','Performances','Frees','Environs','Businesses'],
                ]);

                $this->set(compact('user'));
            
            }

            public function add() {
            }

            


                public function isAuthorized($user) {
                    
                    $action = $this->request->getParam('action');
                    //edit アクションは、常にログインしているユーザーに許可されます。
                    if (in_array($action, ['edit','add'])) {
                        return true;
                    }
                    return $user->user_id === $user['id'];
                }
    }
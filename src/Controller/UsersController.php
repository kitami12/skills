<?php
// src/Controller/auth_informationController.php
namespace App\Controller;

class UsersController extends AppController
{
    
    public function initialize() {
        parent::initialize();

        $this->loadComponent('paginator');
        $this->loadComponent('Flash');
        $this->Auth->allow(['logout','add']);
        // ログインしなくてもlogoutとaddは表示できる


    }
  
    public function index()
    {
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        
        $this->set(compact('users'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']); 

            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        $this->set(compact('user'));

        }

    }

    public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('社員IDまたはパスワードが不正です。');
    }
}

    public function logout()
    {
        $this->Flash->success('ログアウトしました。');
        return $this->redirect($this->Auth->logout());
        // ユーザー認証を解除し、ログアウト後のリダイレクト先URLを返す
    }

    
}


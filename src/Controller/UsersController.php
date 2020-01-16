<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function register()
    {
        if ($this->Auth->user()) {
            return $this->redirect(['controller' => 'Jobs', 'action' => 'index']);
        }

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('You are now registered and may login!'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('There was a problem creating your account. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    public function login()
    {
        if ($this->Auth->user()) {
            return $this->redirect(['controller' => 'Jobs', 'action' => 'index']);
        }
        
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success(__('Logged in successfully!'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid email or password, try again!'));
        }
    }

    public function logout()
    {
        $this->Flash->success(__('Logged out successfully!'));
        return $this->redirect($this->Auth->logout());
    }
}

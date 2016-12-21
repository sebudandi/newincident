<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LoginAttempts Controller
 *
 * @property \App\Model\Table\LoginAttemptsTable $LoginAttempts
 */
class LoginAttemptsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $loginAttempts = $this->paginate($this->LoginAttempts);

        $this->set(compact('loginAttempts'));
        $this->set('_serialize', ['loginAttempts']);
    }

    /**
     * View method
     *
     * @param string|null $id Login Attempt id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loginAttempt = $this->LoginAttempts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('loginAttempt', $loginAttempt);
        $this->set('_serialize', ['loginAttempt']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loginAttempt = $this->LoginAttempts->newEntity();
        if ($this->request->is('post')) {
            $loginAttempt = $this->LoginAttempts->patchEntity($loginAttempt, $this->request->data);
            if ($this->LoginAttempts->save($loginAttempt)) {
                $this->Flash->success(__('The login attempt has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The login attempt could not be saved. Please, try again.'));
            }
        }
        $users = $this->LoginAttempts->Users->find('list', ['limit' => 200]);
        $this->set(compact('loginAttempt', 'users'));
        $this->set('_serialize', ['loginAttempt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login Attempt id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loginAttempt = $this->LoginAttempts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loginAttempt = $this->LoginAttempts->patchEntity($loginAttempt, $this->request->data);
            if ($this->LoginAttempts->save($loginAttempt)) {
                $this->Flash->success(__('The login attempt has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The login attempt could not be saved. Please, try again.'));
            }
        }
        $users = $this->LoginAttempts->Users->find('list', ['limit' => 200]);
        $this->set(compact('loginAttempt', 'users'));
        $this->set('_serialize', ['loginAttempt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Login Attempt id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loginAttempt = $this->LoginAttempts->get($id);
        if ($this->LoginAttempts->delete($loginAttempt)) {
            $this->Flash->success(__('The login attempt has been deleted.'));
        } else {
            $this->Flash->error(__('The login attempt could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

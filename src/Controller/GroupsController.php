<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profession Controller
 *
 * @property \App\Model\Table\EventGroupsTable $Groups
 */
class GroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $event_groups = $this->paginate($this->Groups);

        $this->set(compact('event_groups'));
        $this->set('_serialize', ['event_groups']);
    }

    /**
     * View method
     *
     * @param string|null $id Profession id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event_groups = $this->Groups->get($id, [
            'contain' => []
        ]);

        $this->set('', $event_groups);
        $this->set('_serialize', ['event_groups']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event_groups = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $profession = $this->Groups->patchEntity($event_groups, $this->request->data);
            if ($this->Groups->save($profession)) {
                $this->Flash->success(__('The event groups has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event groups could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('event_groups'));
        $this->set('_serialize', ['event_groups']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profession id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event_groups = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event_groups = $this->Groups->patchEntity($event_groups, $this->request->data);
            if ($this->Groups->save($event_groups)) {
                $this->Flash->success(__('The event groups has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event groups could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('event_groups'));
        $this->set('_serialize', ['event_groups']);
    }

    /**
     * Delete method
     *
     * @param string|null $id EventGroups id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event_groups = $this->Groups->get($id);
        if ($this->Groups->delete($event_groups)) {
            $this->Flash->success(__('The event groups has been deleted.'));
        } else {
            $this->Flash->error(__('The event groups could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function isAuthorized($user) {
        $base = 'eventgroups/';
        if ($this->request->action == 'index') {
            $method = $base;
        } else {
            $method = $base . $this->request->action;
        }
        if (isset($user['role']) && in_array($method, $this->_aclist)) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}

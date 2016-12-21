<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meeting Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $events = $this->Event->get($id, [
            'contain' => []
        ]);

        $this->set('events', $events);
        $this->set('_serialize', ['events']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $events = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $events = $this->Events->patchEntity($events, $this->request->data);
            if ($this->Events->save($events)) {
                $this->Flash->success(__('The events has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The events could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $events = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $events = $this->Events->patchEntity($events, $this->request->data);
            if ($this->Events->save($events)) {
                $this->Flash->success(__('The events has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The events could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Events id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $events = $this->Events->get($id);
        if ($this->Events->delete($events)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function isAuthorized($user) {
        $base = 'events/';
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

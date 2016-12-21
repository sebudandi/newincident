<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Report Controller
 *
 * @property \App\Model\Table\ReportTable $Report
 */
class IncidentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $incident = $this->paginate($this->Incident);

        $this->set(compact('incident'));
        $this->set('_serialize', ['incident']);
    }

    /**
     * View method
     *
     * @param string|null $id Incident id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $incident = $this->Incident->get($id, [
            'contain' => []
        ]);

        $this->set('incident', $incident);
        $this->set('_serialize', ['incident']);
        
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $incident = $this->Incident->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['person_details_id'] = $id;
           
            $incident = $this->Incident->patchEntity($incident, $this->request->data);
            if ($this->Incident->save($incident)) {
                $this->Flash->success(__('The incident has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The incident could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('incident'));
        $this->set('_serialize', ['incident']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Incident id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $incident = $this->Incident->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $incident = $this->Incident->patchEntity($incident, $this->request->data);
            if ($this->Incident->save($incident)) {
                $this->Flash->success(__('The report has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The incident could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('incident'));
        $this->set('_serialize', ['incident']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Incident id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $incident = $this->Incident->get($id);
        if ($this->Incidnet->delete($incident)) {
            $this->Flash->success(__('The incident has been deleted.'));
        } else {
            $this->Flash->error(__('The incident could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
     public function isAuthorized($user) {
        $base = 'incident/';
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

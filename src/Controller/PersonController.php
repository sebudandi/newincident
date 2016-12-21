<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Person Controller
 *
 * @property \App\Model\Table\PersonTable $Person
 */
class PersonController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //$this->paginate(array('limit'=>25));
       // $person = $this->Person->find('all');

       // $this->set(compact('person', $person));
        
        $this->paginate =[
            'contain'   => ['Incident']   //with artists We also fetch pictures
        ];
        $this->set('person', $this->paginate($this->Person));
        $this->set('_serialize', ['person']);
        
        
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->Person->get($id, [
            'contain' => ['Incident']
        ]);

        $this->set('person', $person);
        $this->set('_serialize', ['person']);
       
        $incident = $this->Person->Incident-> find('all', array('conditions' =>
					array('person_details_id' => $id)));
        $this->set(compact('incident', $this->paginate($incident)));
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->Person->newEntity();
        if ($this->request->is('post')) {
            $person = $this->Person->patchEntity($person, $this->request->data);
            $result = $this->Person->save($person);
            if ($result) {
               $id = $result->id;
                
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'view', $id]);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('person_details'));
        $this->set('_serialize', ['person_details']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Person_details id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->Person->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $person = $this->Person->patchEntity($person, $this->request->data);
            if ($this->Person->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('person'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->Person->get($id);
        if ($this->Person->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
     public function isAuthorized($user) {
        $base = 'person/';
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

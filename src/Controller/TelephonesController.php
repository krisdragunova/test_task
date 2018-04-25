<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Telephones Controller
 *
 * @property \App\Model\Table\TelephonesTable $Telephones
 */
class TelephonesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('telephones', $this->paginate($this->Telephones));
        $this->set('_serialize', ['telephones']);
    }

    /**
     * View method
     *
     * @param string|null $id Telephone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telephone = $this->Telephones->get($id, [
            'contain' => []
        ]);
        $this->set('telephone', $telephone);
        $this->set('_serialize', ['telephone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telephone = $this->Telephones->newEntity();
        if ($this->request->is('post')) {
            $telephone = $this->Telephones->patchEntity($telephone, $this->request->data);
            if ($this->Telephones->save($telephone)) {
                $this->Flash->success('The telephone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The telephone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('telephone'));
        $this->set('_serialize', ['telephone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telephone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telephone = $this->Telephones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telephone = $this->Telephones->patchEntity($telephone, $this->request->data);
            if ($this->Telephones->save($telephone)) {
                $this->Flash->success('The telephone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The telephone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('telephone'));
        $this->set('_serialize', ['telephone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telephone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telephone = $this->Telephones->get($id);
        if ($this->Telephones->delete($telephone)) {
            $this->Flash->success('The telephone has been deleted.');
        } else {
            $this->Flash->error('The telephone could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

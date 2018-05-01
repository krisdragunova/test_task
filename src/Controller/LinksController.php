<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Links Controller
 *
 * @property \App\Model\Table\LinksTable $Links
 */
class LinksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('links', $this->paginate($this->Links->find('all')->contain(['categories','contacts'])));
        $this->set('_serialize', ['links']);
    }

    /**
     * View method
     *
     * @param string|null $id Link id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => []
        ]);
        $this->set('link', $link);
        $this->set('categories', $this->Links->find('all')->contain('categories'));
        $this->set('contacts', $this->Links->find('all')->contain('contacts'));
        $this->set('_serialize', ['link','categories','contacts']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $link = $this->Links->newEntity();
        if ($this->request->is('post')) {
            $link = $this->Links->patchEntity($link, $this->request->data);
            if ($this->Links->save($link)) {
                $this->Flash->success('The link has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The link could not be saved. Please, try again.');
            }
        }
        $this->set(compact('link'));
        $this->set('_serialize', ['link']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Link id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $link = $this->Links->patchEntity($link, $this->request->data);
            if ($this->Links->save($link)) {
                $this->Flash->success('The link has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The link could not be saved. Please, try again.');
            }
        }

        $this->set('categories', $this->Links->find('all')->contain('categories'));
        $this->set('contacts', $this->Links->find('all')->contain('contacts'));

        $this->set(compact('link'));
        $this->set('_serialize', ['link','categories','contacts']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Link id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $link = $this->Links->get($id);
        if ($this->Links->delete($link)) {
            $this->Flash->success('The link has been deleted.');
        } else {
            $this->Flash->error('The link could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

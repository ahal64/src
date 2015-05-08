<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Landlords Controller
 *
 * @property \App\Model\Table\LandlordsTable $Landlords
 */
class LandlordsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('landlords', $this->paginate($this->Landlords));
        $this->set('_serialize', ['landlords']);
    }

    /**
     * View method
     *
     * @param string|null $id Landlord id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $landlord = $this->Landlords->get($id, [
            'contain' => []
        ]);
        $this->set('landlord', $landlord);
        $this->set('_serialize', ['landlord']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $landlord = $this->Landlords->newEntity();
        if ($this->request->is('post')) {
            $landlord = $this->Landlords->patchEntity($landlord, $this->request->data);
            if ($this->Landlords->save($landlord)) {
                $this->Flash->success('The landlord has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The landlord could not be saved. Please, try again.');
            }
        }
        $this->set(compact('landlord'));
        $this->set('_serialize', ['landlord']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Landlord id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $landlord = $this->Landlords->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $landlord = $this->Landlords->patchEntity($landlord, $this->request->data);
            if ($this->Landlords->save($landlord)) {
                $this->Flash->success('The landlord has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The landlord could not be saved. Please, try again.');
            }
        }
        $this->set(compact('landlord'));
        $this->set('_serialize', ['landlord']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Landlord id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $landlord = $this->Landlords->get($id);
        if ($this->Landlords->delete($landlord)) {
            $this->Flash->success('The landlord has been deleted.');
        } else {
            $this->Flash->error('The landlord could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

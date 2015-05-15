<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupants Controller
 *
 * @property \App\Model\Table\OccupantsTable $Occupants
 */
class OccupantsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('occupants', $this->paginate($this->Occupants));
        $this->set('_serialize', ['occupants']);
    }

    /**
     * View method
     *
     * @param string|null $id Occupant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupant = $this->Occupants->get($id, [
            'contain' => []
        ]);
        $this->set('occupant', $occupant);
        $this->set('_serialize', ['occupant']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupant = $this->Occupants->newEntity();
        if ($this->request->is('post')) {
            $occupant = $this->Occupants->patchEntity($occupant, $this->request->data);
            if ($this->Occupants->save($occupant)) {
                $this->Flash->success('The occupant has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occupant could not be saved. Please, try again.');
            }
        }
        $this->set(compact('occupant'));
        $this->set('_serialize', ['occupant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupant id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupant = $this->Occupants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupant = $this->Occupants->patchEntity($occupant, $this->request->data);
            if ($this->Occupants->save($occupant)) {
                $this->Flash->success('The occupant has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The occupant could not be saved. Please, try again.');
            }
        }
        $this->set(compact('occupant'));
        $this->set('_serialize', ['occupant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupant id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupant = $this->Occupants->get($id);
        if ($this->Occupants->delete($occupant)) {
            $this->Flash->success('The occupant has been deleted.');
        } else {
            $this->Flash->error('The occupant could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

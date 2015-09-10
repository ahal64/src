<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EquProp Controller
 *
 * @property \App\Model\Table\EquPropTable $EquProp
 */
class EquPropController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equProp', $this->paginate($this->EquProp));
        $this->set('_serialize', ['equProp']);
    }

    /**
     * View method
     *
     * @param string|null $id Equ Prop id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equProp = $this->EquProp->get($id, [
            'contain' => []
        ]);
        $this->set('equProp', $equProp);
        $this->set('_serialize', ['equProp']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equProp = $this->EquProp->newEntity();
        if ($this->request->is('post')) {
            $equProp = $this->EquProp->patchEntity($equProp, $this->request->data);
            if ($this->EquProp->save($equProp)) {
                $this->Flash->success('The equ prop has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equ prop could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equProp'));
        $this->set('_serialize', ['equProp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equ Prop id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equProp = $this->EquProp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equProp = $this->EquProp->patchEntity($equProp, $this->request->data);
            if ($this->EquProp->save($equProp)) {
                $this->Flash->success('The equ prop has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equ prop could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equProp'));
        $this->set('_serialize', ['equProp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equ Prop id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equProp = $this->EquProp->get($id);
        if ($this->EquProp->delete($equProp)) {
            $this->Flash->success('The equ prop has been deleted.');
        } else {
            $this->Flash->error('The equ prop could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencygroups Controller
 *
 * @property \App\Model\Table\AgencygroupsTable $Agencygroups
 */
class AgencygroupsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('agencygroups', $this->paginate($this->Agencygroups));
        $this->set('_serialize', ['agencygroups']);
    }

    /**
     * View method
     *
     * @param string|null $id Agencygroup id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agencygroup = $this->Agencygroups->get($id, [
            'contain' => []
        ]);
        $this->set('agencygroup', $agencygroup);
        $this->set('_serialize', ['agencygroup']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agencygroup = $this->Agencygroups->newEntity();
        if ($this->request->is('post')) {
            $agencygroup = $this->Agencygroups->patchEntity($agencygroup, $this->request->data);
            if ($this->Agencygroups->save($agencygroup)) {
                $this->Flash->success('The agencygroup has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencygroup could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencygroup'));
        $this->set('_serialize', ['agencygroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencygroup id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencygroup = $this->Agencygroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencygroup = $this->Agencygroups->patchEntity($agencygroup, $this->request->data);
            if ($this->Agencygroups->save($agencygroup)) {
                $this->Flash->success('The agencygroup has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencygroup could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencygroup'));
        $this->set('_serialize', ['agencygroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencygroup id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencygroup = $this->Agencygroups->get($id);
        if ($this->Agencygroups->delete($agencygroup)) {
            $this->Flash->success('The agencygroup has been deleted.');
        } else {
            $this->Flash->error('The agencygroup could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

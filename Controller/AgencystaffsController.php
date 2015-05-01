<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencystaffs Controller
 *
 * @property \App\Model\Table\AgencystaffsTable $Agencystaffs
 */
class AgencystaffsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('agencystaffs', $this->paginate($this->Agencystaffs));
        $this->set('_serialize', ['agencystaffs']);
    }

    /**
     * View method
     *
     * @param string|null $id Agencystaff id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agencystaff = $this->Agencystaffs->get($id, [
            'contain' => []
        ]);
        $this->set('agencystaff', $agencystaff);
        $this->set('_serialize', ['agencystaff']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agencystaff = $this->Agencystaffs->newEntity();
        if ($this->request->is('post')) {
            $agencystaff = $this->Agencystaffs->patchEntity($agencystaff, $this->request->data);
            if ($this->Agencystaffs->save($agencystaff)) {
                $this->Flash->success('The agencystaff has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencystaff could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencystaff'));
        $this->set('_serialize', ['agencystaff']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencystaff id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencystaff = $this->Agencystaffs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencystaff = $this->Agencystaffs->patchEntity($agencystaff, $this->request->data);
            if ($this->Agencystaffs->save($agencystaff)) {
                $this->Flash->success('The agencystaff has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencystaff could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencystaff'));
        $this->set('_serialize', ['agencystaff']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencystaff id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencystaff = $this->Agencystaffs->get($id);
        if ($this->Agencystaffs->delete($agencystaff)) {
            $this->Flash->success('The agencystaff has been deleted.');
        } else {
            $this->Flash->error('The agencystaff could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

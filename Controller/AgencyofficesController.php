<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencyoffices Controller
 *
 * @property \App\Model\Table\AgencyofficesTable $Agencyoffices
 */
class AgencyofficesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('agencyoffices', $this->paginate($this->Agencyoffices));
        $this->set('_serialize', ['agencyoffices']);
    }

    /**
     * View method
     *
     * @param string|null $id Agencyoffice id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
		$agencyoffice = $this->Agencyoffices->get($id);
		
        $agencystaffs = $this->Agencyoffices->get($id, [
            'contain' => ['Agencystaffs']
                    ]);
		
        $this->set('agencyoffice', $agencyoffice);
		$this->set('agencystaffs', $agencystaffs->toArray());	
        $this->set('_serialize', ['agencyoffice']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->loadModel('Agencystaffs');
		
        $agencyoffice = $this->Agencyoffices->newEntity();
        if ($this->request->is('post')) {
            $agencyoffice = $this->Agencyoffices->patchEntity($agencyoffice, $this->request->data);
            if ($this->Agencyoffices->save($agencyoffice)) {
                $this->Flash->success('The agencyoffice has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencyoffice could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencyoffice'));
        $this->set('_serialize', ['agencyoffice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencyoffice id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencyoffice = $this->Agencyoffices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencyoffice = $this->Agencyoffices->patchEntity($agencyoffice, $this->request->data);
            if ($this->Agencyoffices->save($agencyoffice)) {
                $this->Flash->success('The agencyoffice has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencyoffice could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencyoffice'));
        $this->set('_serialize', ['agencyoffice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencyoffice id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencyoffice = $this->Agencyoffices->get($id);
        if ($this->Agencyoffices->delete($agencyoffice)) {
            $this->Flash->success('The agencyoffice has been deleted.');
        } else {
            $this->Flash->error('The agencyoffice could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

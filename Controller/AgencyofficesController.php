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
					
		$properties = $this->Agencyoffices->get($id, [
            'contain' => ['Properties']
                    ]);			
		
        $this->set('agencyoffice', $agencyoffice);
		$this->set('agencystaffs', $agencystaffs->toArray());	
		$this->set('properties', $properties->toArray());
        $this->set('_serialize', ['agencyoffice']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($groupid = null)
    {
		// find all agency groups to display in a dropdown box
		$agencygroups = $this->loadModel('Agencygroups');
	    //$grouplist = $agencygroups->find('list')->extract('agencygroupid');
		$grouplist = $agencygroups->find('list')->select(['agencygroupid','groupname']);
		//$grouplist = $query->toArray();
		//$grouplist = $agencygroups->find('list',array('fields' =>select(['agencygroupid']),select(['groupname'])));

        $agencyoffice = $this->Agencyoffices->newEntity();
        if ($this->request->is('post')) {
			
			//swap groupname with the id
		/*	$idOption = $agencygroups
			            ->select(['agencygroupid'])
						->where(['groupname' => ])
			$this->data['Agencygroups']['agencygroupid'] = $idOption;*/
			
			
			
            $agencyoffice = $this->Agencyoffices->patchEntity($agencyoffice, $this->request->data);
            if ($this->Agencyoffices->save($agencyoffice)) {
                $this->Flash->success('The agencyoffice has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The agencyoffice could not be saved. Please, try again.');
            }
        }
        $this->set(compact('agencyoffice','groupid','grouplist'));
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
	
	public function clickAddStaffButton($currentagencyoffice=null)
	{
		$this->redirect(array(
		      'controller' => 'agencystaffs',
		      'action' => 'add',
			  $currentagencyoffice));	
	}
	
	public function clickAddPropertyButton($currentagencyoffice=null)
	{
		$this->redirect(array(
		      'controller' => 'properties',
		      'action' => 'add',
			  $currentagencyoffice));
		
	}
}

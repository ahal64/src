<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipmenttypes Controller
 *
 * @property \App\Model\Table\EquipmenttypesTable $Equipmenttypes
 */
class EquipmenttypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equipmenttypes', $this->paginate($this->Equipmenttypes));
        $this->set('_serialize', ['equipmenttypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipmenttype id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
		//original code
        /**$equipmenttype = $this->Equipmenttypes->get($id, [
            'contain' => []
        ]);*/
		$equipmenttype = $this->Equipmenttypes->get($id);
		
		//all the equipment for respective equipment type		
		$equipments = $this->Equipmenttypes->get($id, [
						'contain' => ['Equipment']
					]);
		$this->set('equipments',$equipments->toArray());
		
		
        $this->set('equipmenttype', $equipmenttype);
        $this->set('_serialize', ['equipmenttype']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipmenttype = $this->Equipmenttypes->newEntity();
        if ($this->request->is('post')) {
            $equipmenttype = $this->Equipmenttypes->patchEntity($equipmenttype, $this->request->data);
            if ($this->Equipmenttypes->save($equipmenttype)) {
                $this->Flash->success('The equipmenttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipmenttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipmenttype'));
        $this->set('_serialize', ['equipmenttype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipmenttype id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipmenttype = $this->Equipmenttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipmenttype = $this->Equipmenttypes->patchEntity($equipmenttype, $this->request->data);
            if ($this->Equipmenttypes->save($equipmenttype)) {
                $this->Flash->success('The equipmenttype has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipmenttype could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipmenttype'));
        $this->set('_serialize', ['equipmenttype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipmenttype id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipmenttype = $this->Equipmenttypes->get($id);
        if ($this->Equipmenttypes->delete($equipmenttype)) {
            $this->Flash->success('The equipmenttype has been deleted.');
        } else {
            $this->Flash->error('The equipmenttype could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function clickAddEquipmentButton($currentequtype=null)
	{
		$this->redirect(array(
		      'controller' => 'equipment',
		      'action' => 'add',
			  $currentequtype));
	}
}

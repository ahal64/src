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
    public function add($propertyid = null)
    {
		$properties = $this->loadModel('Properties');
	    $propertylist = $properties->find('list')->select(['propertiesid','address1']);
		
		$equipment = $this->loadModel('Equipment');
	    $equipmentlist = $equipment->find('list')->select(['equipid','name']);

		//example: $patients = $this->DrugsPatients->Patients->find('list', ['keyField' => 'id','valueField' => 'person.name'])->contain(['People']);
		//$equipmentlist = $this->EquProp->Equipment->find('list', ['keyField' => 'equipid','valueField' => 'equipment.name']);
		//$propertylist = $this->EquProp->Properties->find('list', ['keyField' => 'propertiesid','valueField' => 'properties.address1']);
		
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
        $this->set(compact('equProp','propertyid','propertylist','equipmentlist'));
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

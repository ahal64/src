<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipment Controller
 *
 * @property \App\Model\Table\EquipmentTable $Equipment
 */
class EquipmentController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equipment', $this->paginate($this->Equipment));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
		//original code
       /** $equipment = $this->Equipment->get($id, [
            'contain' => []
        ]);**/
		$equipment = $this->Equipment->get($id);
		
		//all the standards for selected equipment(item)
		$standards = $this->Equipment->get($id, [
            'contain' => ['standards']
        ]);
		
		
        $this->set('equipment', $equipment);
		$this->set('standards', $standards->toArray());
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($equtypeid = null)
    {
		$equipmenttypes = $this->loadModel('Equipmenttypes');
		$equtypelist = $equipmenttypes->find('list')->select(['eqtypeid','name']);
		
		
        $equipment = $this->Equipment->newEntity();
        if ($this->request->is('post')) {
            $equipment = $this->Equipment->patchEntity($equipment, $this->request->data);
            if ($this->Equipment->save($equipment)) {
                $this->Flash->success('The equipment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipment could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipment','equtypeid','equtypelist'));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipment = $this->Equipment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipment = $this->Equipment->patchEntity($equipment, $this->request->data);
            if ($this->Equipment->save($equipment)) {
                $this->Flash->success('The equipment has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipment could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipment'));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipment = $this->Equipment->get($id);
        if ($this->Equipment->delete($equipment)) {
            $this->Flash->success('The equipment has been deleted.');
        } else {
            $this->Flash->error('The equipment could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function clickAddStandardButton($currentequipment=null)
	{
		$this->redirect(array(
		      'controller' => 'standards',
		      'action' => 'add',
			  $currentequipment));
	}
}

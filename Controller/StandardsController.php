<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Standards Controller
 *
 * @property \App\Model\Table\StandardsTable $Standards
 */
class StandardsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('standards', $this->paginate($this->Standards));
        $this->set('_serialize', ['standards']);
    }

    /**
     * View method
     *
     * @param string|null $id Standard id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
		//original code
       /* $standard = $this->Standards->get($id, [
            'contain' => []
        ]);*/
		$standard = $this->Standards->get($id);
		//all tasks of selected standard
		$tasks = $this->Standards->get($id, [
						'contain' => ['Tasks']
					]);
					
        $this->set('standard', $standard);
		$this->set('tasks', $tasks->toArray());	
        $this->set('_serialize', ['standard']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($equipmentid = null)
    {
		//find all standards to display in a dropdown box
		$eqipments = $this->loadModel('Equipment');
		$equipmentlist = $eqipments->find('list')->select(['equipid','name']);
		
        $standard = $this->Standards->newEntity();
        if ($this->request->is('post')) {
            $standard = $this->Standards->patchEntity($standard, $this->request->data);
            if ($this->Standards->save($standard)) {
                $this->Flash->success('The standard has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The standard could not be saved. Please, try again.');
            }
        }
        $this->set(compact('standard','equipmentid','equipmentlist'));
        $this->set('_serialize', ['standard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Standard id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $standard = $this->Standards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $standard = $this->Standards->patchEntity($standard, $this->request->data);
            if ($this->Standards->save($standard)) {
                $this->Flash->success('The standard has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The standard could not be saved. Please, try again.');
            }
        }
        $this->set(compact('standard'));
        $this->set('_serialize', ['standard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Standard id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $standard = $this->Standards->get($id);
        if ($this->Standards->delete($standard)) {
            $this->Flash->success('The standard has been deleted.');
        } else {
            $this->Flash->error('The standard could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
	
	public function clickAddTaskButton($currentstandard=null)
	{
		$this->redirect(array(
		      'controller' => 'tasks',
		      'action' => 'add',
			  $currentstandard));
	}
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ecoles Controller
 *
 * @property \App\Model\Table\EcolesTable $Ecoles
 */
class EcolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ecoles = $this->paginate($this->Ecoles);

        $this->set(compact('ecoles'));
        $this->set('_serialize', ['ecoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Ecole id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ecole = $this->Ecoles->get($id, [
            'contain' => []
        ]);

        $this->set('ecole', $ecole);
        $this->set('_serialize', ['ecole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ecole = $this->Ecoles->newEntity();
        if ($this->request->is('post')) {
            $ecole = $this->Ecoles->patchEntity($ecole, $this->request->data);
            if ($this->Ecoles->save($ecole)) {
                $this->Flash->success(__('The ecole has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ecole could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ecole'));
        $this->set('_serialize', ['ecole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ecole id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ecole = $this->Ecoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ecole = $this->Ecoles->patchEntity($ecole, $this->request->data);
            if ($this->Ecoles->save($ecole)) {
                $this->Flash->success(__('The ecole has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ecole could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ecole'));
        $this->set('_serialize', ['ecole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ecole id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ecole = $this->Ecoles->get($id);
        if ($this->Ecoles->delete($ecole)) {
            $this->Flash->success(__('The ecole has been deleted.'));
        } else {
            $this->Flash->error(__('The ecole could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Speciales Controller
 *
 * @property \App\Model\Table\SpecialesTable $Speciales
 */
class SpecialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $speciales = $this->paginate($this->Speciales);

        $this->set(compact('speciales'));
        $this->set('_serialize', ['speciales']);
    }

    /**
     * View method
     *
     * @param string|null $id Speciale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $speciale = $this->Speciales->get($id, [
            'contain' => []
        ]);

        $this->set('speciale', $speciale);
        $this->set('_serialize', ['speciale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $speciale = $this->Speciales->newEntity();
        if ($this->request->is('post')) {
            $speciale = $this->Speciales->patchEntity($speciale, $this->request->data);
            if ($this->Speciales->save($speciale)) {
                $this->Flash->success(__('The speciale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The speciale could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('speciale'));
        $this->set('_serialize', ['speciale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Speciale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $speciale = $this->Speciales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $speciale = $this->Speciales->patchEntity($speciale, $this->request->data);
            if ($this->Speciales->save($speciale)) {
                $this->Flash->success(__('The speciale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The speciale could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('speciale'));
        $this->set('_serialize', ['speciale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Speciale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $speciale = $this->Speciales->get($id);
        if ($this->Speciales->delete($speciale)) {
            $this->Flash->success(__('The speciale has been deleted.'));
        } else {
            $this->Flash->error(__('The speciale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

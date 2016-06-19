<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Familiers Controller
 *
 * @property \App\Model\Table\FamiliersTable $Familiers
 */
class FamiliersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personnages']
        ];
        $familiers = $this->paginate($this->Familiers);

        $this->set(compact('familiers'));
        $this->set('_serialize', ['familiers']);
    }

    /**
     * View method
     *
     * @param string|null $id Familier id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $familier = $this->Familiers->get($id, [
            'contain' => ['Personnages']
        ]);

        $this->set('familier', $familier);
        $this->set('_serialize', ['familier']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $familier = $this->Familiers->newEntity();
        if ($this->request->is('post')) {
            $familier = $this->Familiers->patchEntity($familier, $this->request->data);
            if ($this->Familiers->save($familier)) {
                $this->Flash->success(__('The familier has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The familier could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Familiers->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('familier', 'personnages'));
        $this->set('_serialize', ['familier']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Familier id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $familier = $this->Familiers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $familier = $this->Familiers->patchEntity($familier, $this->request->data);
            if ($this->Familiers->save($familier)) {
                $this->Flash->success(__('The familier has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The familier could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Familiers->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('familier', 'personnages'));
        $this->set('_serialize', ['familier']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Familier id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $familier = $this->Familiers->get($id);
        if ($this->Familiers->delete($familier)) {
            $this->Flash->success(__('The familier has been deleted.'));
        } else {
            $this->Flash->error(__('The familier could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

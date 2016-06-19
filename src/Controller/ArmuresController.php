<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Armures Controller
 *
 * @property \App\Model\Table\ArmuresTable $Armures
 */
class ArmuresController extends AppController
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
        $armures = $this->paginate($this->Armures);

        $this->set(compact('armures'));
        $this->set('_serialize', ['armures']);
    }

    /**
     * View method
     *
     * @param string|null $id Armure id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $armure = $this->Armures->get($id, [
            'contain' => ['Personnages']
        ]);

        $this->set('armure', $armure);
        $this->set('_serialize', ['armure']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $armure = $this->Armures->newEntity();
        if ($this->request->is('post')) {
            $armure = $this->Armures->patchEntity($armure, $this->request->data);
            if ($this->Armures->save($armure)) {
                $this->Flash->success(__('The armure has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The armure could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Armures->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('armure', 'personnages'));
        $this->set('_serialize', ['armure']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Armure id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $armure = $this->Armures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $armure = $this->Armures->patchEntity($armure, $this->request->data);
            if ($this->Armures->save($armure)) {
                $this->Flash->success(__('The armure has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The armure could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Armures->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('armure', 'personnages'));
        $this->set('_serialize', ['armure']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Armure id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $armure = $this->Armures->get($id);
        if ($this->Armures->delete($armure)) {
            $this->Flash->success(__('The armure has been deleted.'));
        } else {
            $this->Flash->error(__('The armure could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

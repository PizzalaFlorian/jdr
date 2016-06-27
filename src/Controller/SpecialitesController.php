<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Specialites Controller
 *
 * @property \App\Model\Table\SpecialitesTable $Specialites
 */
class SpecialitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Speciales', 'Personnages']
        ];
        $specialites = $this->paginate($this->Specialites);

        $this->set(compact('specialites'));
        $this->set('_serialize', ['specialites']);
    }

    /**
     * View method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialite = $this->Specialites->get($id, [
            'contain' => ['Speciales', 'Personnages']
        ]);

        $this->set('specialite', $specialite);
        $this->set('_serialize', ['specialite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialite = $this->Specialites->newEntity();
        if ($this->request->is('post')) {
            $specialite = $this->Specialites->patchEntity($specialite, $this->request->data);
            if ($this->Specialites->save($specialite)) {
                //$this->Flash->success(__('The specialite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The specialite could not be saved. Please, try again.'));
            }
        }
        $speciales = $this->Specialites->Speciales->find('list', ['limit' => 200]);
        $personnages = $this->Specialites->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('specialite', 'speciales', 'personnages'));
        $this->set('_serialize', ['specialite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialite = $this->Specialites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialite = $this->Specialites->patchEntity($specialite, $this->request->data);
            if ($this->Specialites->save($specialite)) {
                //$this->Flash->success(__('The specialite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The specialite could not be saved. Please, try again.'));
            }
        }
        $speciales = $this->Specialites->Speciales->find('list', ['limit' => 200]);
        $personnages = $this->Specialites->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('specialite', 'speciales', 'personnages'));
        $this->set('_serialize', ['specialite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialite = $this->Specialites->get($id);
        if ($this->Specialites->delete($specialite)) {
            //$this->Flash->success(__('The specialite has been deleted.'));
        } else {
            //$this->Flash->error(__('The specialite could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

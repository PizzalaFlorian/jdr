<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Maitrises Controller
 *
 * @property \App\Model\Table\MaitrisesTable $Maitrises
 */
class MaitrisesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ecoles', 'Personnages']
        ];
        $maitrises = $this->paginate($this->Maitrises);

        $this->set(compact('maitrises'));
        $this->set('_serialize', ['maitrises']);
    }

    /**
     * View method
     *
     * @param string|null $id Maitrise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maitrise = $this->Maitrises->get($id, [
            'contain' => ['Ecoles', 'Personnages']
        ]);

        $this->set('maitrise', $maitrise);
        $this->set('_serialize', ['maitrise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maitrise = $this->Maitrises->newEntity();
        if ($this->request->is('post')) {
            $maitrise = $this->Maitrises->patchEntity($maitrise, $this->request->data);
            if ($this->Maitrises->save($maitrise)) {
                $this->Flash->success(__('The maitrise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maitrise could not be saved. Please, try again.'));
            }
        }
        $ecoles = $this->Maitrises->Ecoles->find('list', ['limit' => 200]);
        $personnages = $this->Maitrises->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('maitrise', 'ecoles', 'personnages'));
        $this->set('_serialize', ['maitrise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maitrise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maitrise = $this->Maitrises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maitrise = $this->Maitrises->patchEntity($maitrise, $this->request->data);
            if ($this->Maitrises->save($maitrise)) {
                $this->Flash->success(__('The maitrise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The maitrise could not be saved. Please, try again.'));
            }
        }
        $ecoles = $this->Maitrises->Ecoles->find('list', ['limit' => 200]);
        $personnages = $this->Maitrises->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('maitrise', 'ecoles', 'personnages'));
        $this->set('_serialize', ['maitrise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maitrise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maitrise = $this->Maitrises->get($id);
        if ($this->Maitrises->delete($maitrise)) {
            $this->Flash->success(__('The maitrise has been deleted.'));
        } else {
            $this->Flash->error(__('The maitrise could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

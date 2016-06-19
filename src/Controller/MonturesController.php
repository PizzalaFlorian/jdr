<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Montures Controller
 *
 * @property \App\Model\Table\MonturesTable $Montures
 */
class MonturesController extends AppController
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
        $montures = $this->paginate($this->Montures);

        $this->set(compact('montures'));
        $this->set('_serialize', ['montures']);
    }

    /**
     * View method
     *
     * @param string|null $id Monture id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monture = $this->Montures->get($id, [
            'contain' => ['Personnages']
        ]);

        $this->set('monture', $monture);
        $this->set('_serialize', ['monture']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monture = $this->Montures->newEntity();
        if ($this->request->is('post')) {
            $monture = $this->Montures->patchEntity($monture, $this->request->data);
            if ($this->Montures->save($monture)) {
                $this->Flash->success(__('The monture has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The monture could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Montures->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('monture', 'personnages'));
        $this->set('_serialize', ['monture']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Monture id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monture = $this->Montures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monture = $this->Montures->patchEntity($monture, $this->request->data);
            if ($this->Montures->save($monture)) {
                $this->Flash->success(__('The monture has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The monture could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Montures->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('monture', 'personnages'));
        $this->set('_serialize', ['monture']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Monture id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monture = $this->Montures->get($id);
        if ($this->Montures->delete($monture)) {
            $this->Flash->success(__('The monture has been deleted.'));
        } else {
            $this->Flash->error(__('The monture could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

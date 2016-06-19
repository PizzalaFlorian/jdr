<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Connaissances Controller
 *
 * @property \App\Model\Table\ConnaissancesTable $Connaissances
 */
class ConnaissancesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Competences', 'Personnages']
        ];
        $connaissances = $this->paginate($this->Connaissances);

        $this->set(compact('connaissances'));
        $this->set('_serialize', ['connaissances']);
    }

    /**
     * View method
     *
     * @param string|null $id Connaissance id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $connaissance = $this->Connaissances->get($id, [
            'contain' => ['Competences', 'Personnages']
        ]);

        $this->set('connaissance', $connaissance);
        $this->set('_serialize', ['connaissance']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $connaissance = $this->Connaissances->newEntity();
        if ($this->request->is('post')) {
            $connaissance = $this->Connaissances->patchEntity($connaissance, $this->request->data);
            if ($this->Connaissances->save($connaissance)) {
                $this->Flash->success(__('The connaissance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The connaissance could not be saved. Please, try again.'));
            }
        }
        $competences = $this->Connaissances->Competences->find('list', ['limit' => 200]);
        $personnages = $this->Connaissances->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('connaissance', 'competences', 'personnages'));
        $this->set('_serialize', ['connaissance']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Connaissance id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $connaissance = $this->Connaissances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $connaissance = $this->Connaissances->patchEntity($connaissance, $this->request->data);
            if ($this->Connaissances->save($connaissance)) {
                $this->Flash->success(__('The connaissance has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The connaissance could not be saved. Please, try again.'));
            }
        }
        $competences = $this->Connaissances->Competences->find('list', ['limit' => 200]);
        $personnages = $this->Connaissances->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('connaissance', 'competences', 'personnages'));
        $this->set('_serialize', ['connaissance']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Connaissance id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $connaissance = $this->Connaissances->get($id);
        if ($this->Connaissances->delete($connaissance)) {
            $this->Flash->success(__('The connaissance has been deleted.'));
        } else {
            $this->Flash->error(__('The connaissance could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

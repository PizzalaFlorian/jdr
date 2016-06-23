<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competences Controller
 *
 * @property \App\Model\Table\CompetencesTable $Competences
 */
class CompetencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $competences = $this->paginate($this->Competences);

        $this->set(compact('competences'));
        $this->set('_serialize', ['competences']);
    }

    /**
     * View method
     *
     * @param string|null $id Competence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competence = $this->Competences->get($id, [
            'contain' => []
        ]);

        $this->set('competence', $competence);
        $this->set('_serialize', ['competence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competence = $this->Competences->newEntity();
        if ($this->request->is('post')) {
            $competence = $this->Competences->patchEntity($competence, $this->request->data);
            if ($this->Competences->save($competence)) {
                //$this->Flash->success(__('The competence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The competence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('competence'));
        $this->set('_serialize', ['competence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Competence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competence = $this->Competences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competence = $this->Competences->patchEntity($competence, $this->request->data);
            if ($this->Competences->save($competence)) {
                //$this->Flash->success(__('The competence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The competence could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('competence'));
        $this->set('_serialize', ['competence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Competence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competence = $this->Competences->get($id);
        if ($this->Competences->delete($competence)) {
            //$this->Flash->success(__('The competence has been deleted.'));
        } else {
            //$this->Flash->error(__('The competence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

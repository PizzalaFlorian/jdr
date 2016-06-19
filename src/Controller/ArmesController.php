<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Armes Controller
 *
 * @property \App\Model\Table\ArmesTable $Armes
 */
class ArmesController extends AppController
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
        $armes = $this->paginate($this->Armes);

        $this->set(compact('armes'));
        $this->set('_serialize', ['armes']);
    }

    /**
     * View method
     *
     * @param string|null $id Arme id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arme = $this->Armes->get($id, [
            'contain' => ['Personnages']
        ]);

        $this->set('arme', $arme);
        $this->set('_serialize', ['arme']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arme = $this->Armes->newEntity();
        if ($this->request->is('post')) {
            $arme = $this->Armes->patchEntity($arme, $this->request->data);
            if ($this->Armes->save($arme)) {
                $this->Flash->success(__('The arme has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arme could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Armes->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('arme', 'personnages'));
        $this->set('_serialize', ['arme']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arme id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arme = $this->Armes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arme = $this->Armes->patchEntity($arme, $this->request->data);
            if ($this->Armes->save($arme)) {
                $this->Flash->success(__('The arme has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arme could not be saved. Please, try again.'));
            }
        }
        $personnages = $this->Armes->Personnages->find('list', ['limit' => 200]);
        $this->set(compact('arme', 'personnages'));
        $this->set('_serialize', ['arme']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arme id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arme = $this->Armes->get($id);
        if ($this->Armes->delete($arme)) {
            $this->Flash->success(__('The arme has been deleted.'));
        } else {
            $this->Flash->error(__('The arme could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

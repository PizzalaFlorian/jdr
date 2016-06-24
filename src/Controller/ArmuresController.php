<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

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
    public function add($path=null)
    {
        $args = explode('-',$path);
        $armure = $this->Armures->newEntity();
        $personnage = TableRegistry::get('personnages')
            ->find()
            ->where(['id'=>$args[0]])
            ->first();
            
        if ($this->request->is('post')) {
            $armure = $this->Armures->patchEntity($armure, $this->request->data);
            if ($this->Armures->save($armure)) {
                //$this->Flash->success(__('The armure has been saved.'));
                return $this->redirect(['controller' => 'Personnages', 'action' => 'feuille',$personnage->id]);
            } else {
                //$this->Flash->error(__('The armure could not be saved. Please, try again.'));
            }
        }
        $this->set('personnage',$personnage);
        $this->set('emplacement',$args[1]);
        $this->set(compact('armure'));
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
        $personnage = TableRegistry::get('personnages')
            ->find()
            ->where(['id'=>$armure->personnages_id])
            ->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $armure = $this->Armures->patchEntity($armure, $this->request->data);
            if ($this->Armures->save($armure)) {
                //$this->Flash->success(__('The armure has been saved.'));
                return $this->redirect(['controller' => 'Personnages', 'action' => 'feuille',$personnage->id]);
            } else {
                //$this->Flash->error(__('The armure could not be saved. Please, try again.'));
            }
        }
        $this->set('personnage',$personnage);
        $this->set(compact('armure'));
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
        //$this->request->allowMethod(['post', 'delete']);
        $armure = $this->Armures->get($id);
        $id = $armure->personnages_id;
        if ($this->Armures->delete($armure)) {
            //$this->Flash->success(__('The armure has been deleted.'));
        } else {
            //$this->Flash->error(__('The armure could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Personnages', 'action' => 'feuille',$id]);
    }
}

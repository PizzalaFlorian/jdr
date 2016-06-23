<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Personnages Controller
 *
 * @property \App\Model\Table\PersonnagesTable $Personnages
 */
class PersonnagesController extends AppController
{

    public function feuille($id=null){
        $personnage = $this->Personnages->get($id, [
            'contain' => []
        ]);
       
        $armes = TableRegistry::get('armes')
            ->find()
            ->where(['personnages_id'=>$personnage->id])
            ->toArray();

        $armures = TableRegistry::get('armures')
            ->find()
            ->where(['personnages_id'=>$personnage->id])
            ->toArray();
        
        $objects = TableRegistry::get('objects')
            ->find()
            ->where(['personnages_id'=>$personnage->id])
            ->toArray();

        $familiers = TableRegistry::get('familiers')
            ->find()
            ->where(['personnages_id'=>$personnage->id])
            ->toArray();

        $montures = TableRegistry::get('montures')
            ->find()
            ->where(['personnages_id'=>$personnage->id])
            ->toArray();

        $competences = TableRegistry::get('connaissances')
            ->find()
            ->select(array(
                'nom' => 'c.nom',
                'bonnus'=>'connaissances.bonnus'
                )
            )
             ->join([
                'c' => [
                    'table' => 'competences',
                    'type' => 'INNER',
                    'conditions' => 'c.id = connaissances.competences_id',
                ]
            ])
            ->where(['personnages_id' => $personnage->id])
            ->order(['bonnus'=>'DESC'])
            ->toArray();

        $competences_speciales = TableRegistry::get('specialites')
            ->find()
            ->select(array(
                'nom' => 'c.nom',
                'description'=>'c.description'
                )
            )
             ->join([
                'c' => [
                    'table' => 'speciales',
                    'type' => 'INNER',
                    'conditions' => 'c.id = specialites.speciales_id',
                ]
            ])
            ->where(['personnages_id' => $personnage->id])
            ->toArray();

         $ecoles = TableRegistry::get('maitrises')
            ->find()
            ->select(array(
                'nom' => 'c.nom',
                'type'=>'type',
                'id'=>'maitrises.id'
                )
            )
             ->join([
                'c' => [
                    'table' => 'ecoles',
                    'type' => 'INNER',
                    'conditions' => 'c.id = maitrises.ecoles_id',
                ]
            ])
            ->where(['personnages_id' => $personnage->id])
            ->toArray();

         if ($this->request->is(['patch', 'post', 'put'])) {
            $personnage = $this->Personnages->patchEntity($personnage, $this->request->data);
            if ($this->Personnages->save($personnage)) {
                //$this->Flash->success(__('The personnage has been saved.'));
            } else {
                //$this->Flash->error(__('The personnage could not be saved. Please, try again.'));
            }
        }

        $this->set('armes',$armes);
        $this->set('armures',$armures);
        $this->set('objects',$objects);
        $this->set('familiers',$familiers);
        $this->set('montures',$montures);
        $this->set('competences',$competences);
        $this->set('competences_speciales',$competences_speciales);
        $this->set('ecoles',$ecoles);
        $this->set('personnage', $personnage);
        $this->set('_serialize', ['personnage']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $personnages = $this->paginate($this->Personnages);
        

        $this->set(compact('personnages'));
        $this->set('_serialize', ['personnages']);
    }

    /**
     * View method
     *
     * @param string|null $id Personnage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $personnage = $this->Personnages->get($id, [
            'contain' => []
        ]);

        $this->set('personnage', $personnage);
        $this->set('_serialize', ['personnage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $personnage = $this->Personnages->newEntity();
        if ($this->request->is('post')) {
            $personnage = $this->Personnages->patchEntity($personnage, $this->request->data);
            if ($this->Personnages->save($personnage)) {
                //$this->Flash->success(__('The personnage has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The personnage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('personnage'));
        $this->set('_serialize', ['personnage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Personnage id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        
        $personnage = $this->Personnages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personnage = $this->Personnages->patchEntity($personnage, $this->request->data);
            if ($this->Personnages->save($personnage)) {
                //$this->Flash->success(__('The personnage has been saved.'));
                return $this->redirect(['action' => 'feuille'.'/'.$id]);
            } else {
                //$this->Flash->error(__('The personnage could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('personnage'));
        $this->set('_serialize', ['personnage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Personnage id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $personnage = $this->Personnages->get($id);

        $armes = TableRegistry::get('armes')
            ->query();
        $armes    
            ->delete()
            ->where(['personnages_id'=>$personnage->id])
            ->execute();

        $armures = TableRegistry::get('armures')
            ->query();
        $armures
            ->delete()
            ->where(['personnages_id'=>$personnage->id])
            ->execute();
        
        $objects = TableRegistry::get('objects')
            ->query();
        $objects
            ->delete()
            ->where(['personnages_id'=>$personnage->id])
            ->execute();

        $familiers = TableRegistry::get('familiers')
            ->query();
        $familiers
            ->delete()
            ->where(['personnages_id'=>$personnage->id])
            ->execute();

        $montures = TableRegistry::get('montures')
            ->query();
        $montures
            ->delete()
            ->where(['personnages_id'=>$personnage->id])
            ->execute();

        $competences = TableRegistry::get('connaissances')
            ->query();
        $competences
            ->delete()
            ->where(['personnages_id' => $personnage->id])
            ->execute();

        $competences_speciales = TableRegistry::get('specialites')
            ->query();
        $competences_speciales
            ->delete()
            ->where(['personnages_id' => $personnage->id])
            ->execute();

        $ecoles = TableRegistry::get('maitrises')
            ->query();
        $ecoles
            ->delete()
            ->where(['personnages_id' => $personnage->id])
            ->execute();
        debug("coucou");   
        if ($this->Personnages->delete($personnage)) {
            //$this->Flash->success(__('The personnage has been deleted.'));
        } else {
            //$this->Flash->error(__('The personnage could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

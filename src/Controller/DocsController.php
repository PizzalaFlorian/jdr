<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class DocsController extends AppController
{
    var $uses = array();
    public function accueil(){
    }
    public function rules(){
    }
    public function lore(){
    }
    public function races(){
    }
    public function professions(){
    }
    public function index(){
        return $this->redirect(['action' => 'rules']);
    }
}

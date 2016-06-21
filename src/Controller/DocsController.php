<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class DocsController extends AppController
{
    var $uses = array();
    public function rules(){
    }
    public function lore(){
    }
    public function index(){
        return $this->redirect(['action' => 'rules']);
    }
}

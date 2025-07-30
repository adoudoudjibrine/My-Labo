<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class EtablissementController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Etablissement'); 
    }

    public function index(){
        $items = $this->Etablissement->all();
        $this->render('admin.etablissement.index', compact('items'));
    }

    public function add(){
    
        if (!empty($_POST)){
            $result = $this->Etablissement->create([
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code'],
                'description' => $_POST['description']
            ]);
            return $this->index();

        }
        $form = new BootstrapForm($_POST); 
        $this->render('admin.etablissement.edit', compact('form'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Etablissement->update(
                $_GET['id'],[
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code'],
                'description' => $_POST['description']
            ]);
            
            return $this->index();
        }

        $Etablissement = $this->Etablissement->find($_GET['id']);
        if (!$Etablissement) {
            $this->notFound();
        }

        $form = new BootstrapForm($Etablissement); 
        $this->render('admin.etablissement.edit', compact('form'));

    }

    public function delete(){
        if (!empty($_POST)){
            $result = $this->Etablissement->delete(
                $_POST['id']
            );

            if(!$result) {
               return $this->index();
            ?>
                <div class="m-4 alert alert-success">
                    L'etablissement a bien été supprimé !
                </div>
            <?php

            }
        }
    }

}


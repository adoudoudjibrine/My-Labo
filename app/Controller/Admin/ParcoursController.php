<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class ParcoursController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Parcours'); 
    }

    public function index(){
        $items = $this->Parcours->all();
        $this->render('admin.parcours.index', compact('items'));
    }

    public function add(){
    
        if (!empty($_POST)){
            $result = $this->Parcours->create([
                'intitule' => $_POST['intitule'],
                'departement_id' => $_POST['departement_id'],
                'description' => $_POST['description'],
                'code' => $_POST['code']
            ]);
            return $this->index();

        }
        $this->loadModel('Departement');
        $departements = $this->Departement->extract('id','intitule','code','etablissement_id', 'description');
        $form = new BootstrapForm($_POST); 
        $this->render('admin.parcours.edit', compact('form', 'departements'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Parcours->update(
                $_GET['id'],[
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code']
            ]);
            
            return $this->index();
        }

        $Parcours = $this->Parcours->find($_GET['id']);
        if (!$Parcours) {
            $this->notFound();
        }

        $form = new BootstrapForm($Parcours); 
        $this->render('admin.parcours.edit', compact('form'));

    }

    public function delete(){
        if (!empty($_POST)){
            $result = $this->Parcours->delete(
                $_POST['id']
            );

            if(!$result) {
               return $this->index();
            ?>
                <div class="m-4 alert alert-success">
                    L'Parcours a bien été supprimé !
                </div>
            <?php

            }
        }
    }

}


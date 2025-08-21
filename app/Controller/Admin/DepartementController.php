<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class DepartementController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Departement'); 
    }

    public function index(){
        $departements = $this->Departement->all();
        $this->render('admin.departement.index', compact('departements'));
    }

    public function add(){
    
        if (!empty($_POST)){
             $result = $this->Departement->create([
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code'],
                'etablissement_id' => $_POST['etablissement_id'],
                'description' => $_POST['description']
            ]);

            return $this->index();

        }

        $this->loadModel('Etablissement');
        $etablissements = $this->Etablissement->extract('id','intitule','code');
        $form = new BootstrapForm($_POST); 
        $this->render('admin.departement.edit', compact('form', 'etablissements'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Departement->update(
                $_GET['id'],[
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code'],
                'etablissement_id' => $_POST['etablissement_id'],
                'description' => $_POST['description']
            ]);

            return $this->index();

        }

        $this->loadModel('Etablissement');
        $departement = $this->Departement->find($_GET['id']);
        $etablissements = $this->Etablissement->extract('id','intitule','code');
        if (!$departement) {
            $this->notFound();
        }

        $form = new BootstrapForm($departement); 
        $this->render('admin.departement.edit', compact('form','etablissements'));

    }

    public function delete(){
        $this->loadModel('Departement');
        if (!empty($_POST)){
            $result = $this->Departement->delete(
                $_POST['id']
            );

            if(!$result) {
               return $this->index();
            ?>
                <div class="m-4 alert alert-success">
                    L'article a bien été supprimé !
                </div>
            <?php

            }
        }
    }

}


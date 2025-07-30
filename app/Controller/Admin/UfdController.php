<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class UfdController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Ufd'); 
    }

    public function index(){
        $items = $this->Ufd->all();
        $this->render('admin.ufd.index', compact('items'));
    }

    public function add(){
    
        if (!empty($_POST)){
            $result = $this->Ufd->create([
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code']
            ]);
            return $this->index();

        }
        $form = new BootstrapForm($_POST); 
        $this->render('admin.ufd.edit', compact('form'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Ufd->update(
                $_GET['id'],[
                'intitule' => $_POST['intitule'],
                'code' => $_POST['code']
            ]);
            
            return $this->index();
        }

        $Ufd = $this->Ufd->find($_GET['id']);
        if (!$Ufd) {
            $this->notFound();
        }

        $form = new BootstrapForm($Ufd); 
        $this->render('admin.ufd.edit', compact('form'));

    }

    public function delete(){
        if (!empty($_POST)){
            $result = $this->Ufd->delete(
                $_POST['id']
            );

            if(!$result) {
               return $this->index();
            ?>
                <div class="m-4 alert alert-success">
                    L'Ufd a bien été supprimé !
                </div>
            <?php

            }
        }
    }

}


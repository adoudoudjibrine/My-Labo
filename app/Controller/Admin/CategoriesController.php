<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class CategoriesController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Category'); 
    }

    public function index(){
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add(){
    
        if (!empty($_POST)){
            $result = $this->Category->create([
                'titre' => $_POST['titre']
            ]);
            return $this->index();

        }
        $form = new BootstrapForm($_POST); 
        $this->render('admin.categories.edit', compact('form'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Category->update(
                $_GET['id'],[
                'titre' => $_POST['titre']]
            );
            
            return $this->index();
        }

        $category = $this->Category->find($_GET['id']);
        if (!$category) {
            $this->notFound();
        }

        $form = new BootstrapForm($category); 
        $this->render('admin.categories.edit', compact('form'));

    }

    public function delete(){
        if (!empty($_POST)){
            $result = $this->Category->delete(
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


<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;  

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct(); 
        $this->loadModel('Post'); 
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add(){
    
        if (!empty($_POST)){
            $result = $this->Post->create([
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id'],
                'contenu' => $_POST['contenu']
            ]);

            return $this->index();

        }

        $this->loadModel('Category');
        $categories = $this->Category->extract('id','titre');
        $form = new BootstrapForm($_POST); 
        $this->render('admin.posts.edit', compact('form', 'categories'));
    }

    public function edit(){

        if (!empty($_POST)){
            $result = $this->Post->update(
                $_GET['id'],[
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id'],
                'contenu' => $_POST['contenu']
            ]);
            
        }

        $this->loadModel('Category');
        $post = $this->Post->find($_GET['id']);
        $categories = $this->Category->extract('id','titre');
        if (!$post) {
            $this->notFound();
        }

        $form = new BootstrapForm($post); 
        $this->render('admin.posts.edit', compact('form', 'categories'));

    }

    public function delete(){
        $this->loadModel('Post');
        if (!empty($_POST)){
            $result = $this->Post->delete(
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


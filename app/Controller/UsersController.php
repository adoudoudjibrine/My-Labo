<?php

namespace App\Controller\Admin;
use App\Controller\AppController;
use Core\HTML\BootstrapForm;   
use Core\Auth\DbAuth;
use App;

class UsersController extends AppController
{
    public function login()
    {
        $errors = false;
        if (!empty($_POST)) {
            $auth = new DbAuth(\App::getInstance()->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])){
                header(('Location:  index.php?p=admin.posts.index'));
            }
            else {
                $errors = true;
            }
        }

        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form','errors'));
    }

    public function register()
    {
        // Code to handle user registration
        echo "Register page";
    }

    public function profile()
    {
        // Code to show user profile
        echo "User profile page";
    }

    public function logout()
    {
        // Code to handle user logout
        echo "Logout successful";
    }
}
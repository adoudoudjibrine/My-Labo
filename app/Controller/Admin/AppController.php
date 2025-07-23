<?php

namespace App\Controller\Admin;
use App;
use Core\Auth\DbAuth;

class AppController extends \App\Controller\AppController{

    public function __construct()
    {
        parent::__construct();
        // Auth
        $app = App::getInstance(); // here we get the instance of the App class
        $auth = new DbAuth($app->getDb()); // here we get the instance of the DbAuth class
        if (!$auth->logged()) { // here we check if the user is not logged in
            $this->forbidden(); // here we call the forbidden method of the App class
        }  
    }

}
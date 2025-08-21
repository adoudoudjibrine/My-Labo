<?php

namespace App\Controller;

use App;

class HomeController extends AppController
{
    public function __construct()
    {
        parent::__construct(); // Call the parent constructor to set up the view path
    }

    public function index()
    {

        $this->render('home.index');
    }

    public function create()
    {
        // Code to create a new post
    }

    public function edit($id)
    {
        // Code to edit an existing post by ID
    }

    public function delete($id)
    {
        // Code to delete a post by ID
    }

   
}


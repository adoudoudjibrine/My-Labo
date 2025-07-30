<?php

namespace App\Controller;

use App;

class EtudiantController extends AppController
{
    public function __construct()
    {
        parent::__construct(); // Call the parent constructor to set up the view path
        $this->loadModel('Etudiant'); // Load the Post model
    }

    public function index()
    {
        $etudiant = $this->Etudiant->last();
        $this->render('etudiant.index', compact('etudiant'));
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


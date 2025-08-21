<?php

namespace App\Controller\Admin;

use App;
use Core\HTML\BootstrapForm;


class EtudiantController extends AppController
{
    public function __construct()
    {
        parent::__construct(); // Call the parent constructor to set up the view path
        $this->loadmodel('Etudiant'); // Load the Etudiant model
        
    }

    public function index()
    {
        $etudiant = $this->Etudiant->last();
        $this->render('admin.etudiant.index', compact('etudiant'));
    }

    public function add()
    {
        if (!empty($_POST)){
            $result = $this->Etudiant->create([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'date_de_naissance' => $_POST['date_de_naissance'],
                'extrait' => $_POST['extrait'],
                'etablissement_id' => $_POST['etablissement_id'],
                'departement_id' => $_POST['departement_id'],
                'parcours_id' => $_POST['parcours_id'],
                'sexe' => $_POST['sexe'],
                'email' => $_POST['email'],
                'telephone' => $_POST['telephone'],
                'matricule' => $_POST['matricule']
            ]);
            return $this->index();

        }
        $this->loadModel('Etablissement');
        $this->loadModel('Departement');
        $this->loadModel('Parcours');
        $etablissements = $this->Etablissement->extract('id','intitule','code');
        $departements = $this->Departement->extract('id','intitule','code');
        $parcours = $this->Parcours->extract('id','intitule','code');
        $form = new BootstrapForm($_POST); 
        $this->render('admin.etudiant.edit', compact('form','etablissements', 'departements', 'parcours'));
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


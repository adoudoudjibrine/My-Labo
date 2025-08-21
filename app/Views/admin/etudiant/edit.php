
<form class="row g-3" method="post" class="m-2">
    
    <div class="col-md-6">
        <?= $form->input('nom', 'Nom de l\'etudiant'); ?>
    </div>
    <div class="col-md-6">
        <?= $form->input('prenom', 'Prenom de l\'etudiant'); ?>
    </div>
    <div class="col-md-6">
         <?= $form->input('date_de_naissance', 'Date de naissance de l\'etudaint'); ?>
    </div>
    <div class="col-md-6">
        <?= $form->input('extrait', 'Lieu de naissance de l\'etudaint'); ?>
    </div>
   
    <div class="col-12">
        <?= $form->input('etablissement_id', 'Etablissement de l\'etudiant', $etablissements); ?>
    </div>

    <div class="col-md-6">
        <?= $form->input('departement_id', 'Departement de l\'etudiant', $departements); ?>
    </div>
    <div class="col-md-6">
        <?= $form->input('parcours_id', 'Parcours de l\'etudiant', $parcours); ?>
    </div>

    <div class="col-md-6">
       <?= $form->input('sexe', 'Sexe de l\'etudiant'); ?>
    </div>
    <div class="col-md-6">
         <?= $form->input('email', 'Email de l\'etudiant'); ?>
    </div>
    <div class="col-md-6">
        <?= $form->input('telephone', 'Numero de Telephone de l\'etudiant'); ?>
    </div>
    <div class="col-md-6">
         <?= $form->input('matricule', 'Matricule de l\'etudiant'); ?>
    </div>

    <button class="mt-2 btn btn-primary">Sauvegarder</button>

</form>


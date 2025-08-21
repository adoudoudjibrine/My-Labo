
<form method="post" class="m-2">

    <?= $form->input('intitule', 'Intitule du Parcours'); ?>
    <?= $form->input('code', 'Departement du Parcours', $departements); ?>
    <?= $form->input('code', 'Code du Parcours'); ?>
    <?= $form->input('description', 'Description du Parcours', ['type'=>'textarea']); ?>

    <button class="mt-2 btn btn-primary">Sauvegarder</button>

</form>
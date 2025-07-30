
<form method="post" class="m-2">

    <?= $form->input('intitule', 'Intitule du departement'); ?>
    <?= $form->input('code', 'code du departement'); ?>
    <?= $form->select('etablissement_id', 'Etablissement du departement', $etablissements); ?>
    <?= $form->input('description', 'Descritption du departement', ['type'=>'textarea']); ?>

    <button class="mt-2 btn btn-primary">Sauvegarder</button>

</form>
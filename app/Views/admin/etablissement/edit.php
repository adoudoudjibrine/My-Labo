
<form method="post" class="m-2">

    <?= $form->input('intitule', 'Intitule de l\'etablissement'); ?>
    <?= $form->input('code', 'Code de l\'etablissemnt'); ?>
    <?= $form->input('description', 'Description de l\'etablissement', ['type'=>'textarea']); ?>

    <button class="mt-2 btn btn-primary">Sauvegarder</button>

</form>
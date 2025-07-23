
<form method="post" class="m-2">

    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->select('category_id', 'Category', $categories); ?>
    <?= $form->input('contenu', 'Contenu', ['type'=>'textarea']); ?>

    <button class="mt-2 btn btn-primary">Sauvegarder</button>

</form>
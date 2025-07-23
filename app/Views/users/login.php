<?php if($errors): ?>

    <div class="alert alert-danger">
        Indentifiants Incorrects
    </div>

<?php endif;?>

<form method="post">

    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type'=>'password']); ?>

    <button class="mt-2 btn btn-primary">Envoyer</button>

</form>
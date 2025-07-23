<?php

if ($post === false )
{
    $this->notFound();
}
// On verifie si l'id est un entier
$this->setTitle($post->titre);

?>

<h2>
    <?= $post->titre; ?>
</h2>
<p>
    <em>
        <?= $post->categorie; ?>
    </em>
</p>
<p class="blog-post">
    <?= $post->contenu; ?>
</p>
<p class="unstyle">
    <a class="unstyle" href="index.php?p=home">Retournez a la home page </a>
</p>
 
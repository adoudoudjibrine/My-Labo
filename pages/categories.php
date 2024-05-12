<?php

use App\App;
use App\Table\Categorie;
use App\Table\Article;


$categorie = Categorie::find($_GET['id']);

if ($categorie === false)
{
   App::notFound();
}
$article = Article::lastByCategory($_GET['id']);
$categories = Categorie::getAll();

?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<h1> <?= $categorie->titre; ?></h1>

<div class="row">

    <div class="col-sm-8">
        <?php foreach ($article as $post): ?>
        <?php //var_dump($post); die();?>
        <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2> 
        <p><em><?= $post->categorie; ?></em></p>
        <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach (\App\Table\Categorie::getAll() as $cat): ?>
            <li><a href="<?= $cat->url; ?>"><?= $cat->titre ;?></a></li>
            <?php endforeach; ?>
        </ul>
        
    </div>
</div>




<script src="../public/js/bootstrap.min.js"></script>
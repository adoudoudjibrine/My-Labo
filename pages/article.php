<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$article = Article::find($_GET['id']);

if ($article === false )
{
    App::notFound();
}

App::setTitle($article->titre);

?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<h1><?= $article->titre ?></h1>
<p><em><?= $article->categorie ; ?></em></p>
<p><?= $article->contenu ?></p>

<script src="../public/js/bootstrap.min.js"></script>
<?php

$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?= $post->titre ?></h1>
<p><?= $post->contenu ?></p>
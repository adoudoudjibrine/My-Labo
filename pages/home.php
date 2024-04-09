<link rel="stylesheet" href="../public/css/bootstrap.min.css">


<?php foreach (\App\Table\Article::getLast() as $post): ?>
    <?php //var_dump($post); die();?>
    <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2> 
    <p><em><?= $post->categorie; ?></em></p>

    <p><?= $post->extrait; ?></p>

<?php endforeach; ?>






<script src="../public/js/bootstrap.min.js"></script>
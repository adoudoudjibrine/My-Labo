<?php
    namespace App;
    
<?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>
    <?php // var_dump($post); die();?>
    <h2><a href="<?= $post->getUrl(); ?>"><?= $post->titre; ?></a></h2> 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>Blog</title>
</head>

<h1>Welcome</h1>
<p class="lead">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium accusamus nihil 
    ea molestias debitis sunt accusantium, eos vitae sint quasi fugiat ex eum!
    Sapiente possimus incidunt porro temporibus at eum!
</p>


    
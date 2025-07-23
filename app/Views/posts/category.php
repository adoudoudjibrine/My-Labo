<h1><?= $categorie->titre; ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($articles as $post): ?>
            <h2>
                <a href="<?= $post->url; ?>"> 
                    <?= $post->titre; ?>
                </a>
            </h2> 

            <p>
                <?= $post->extrait; ?>
            </p>
        <?php endforeach; ?>
    </div>
     
    <div class="col-sm-4">

        <h2 class="">Categorie</h2>

        <ul class="list-group">

            <?php foreach ($categories as $categorie) : ?>
            
                <li class="list-group-item ">
                    <a href="<?= $categorie->url; ?>">
                        <?= $categorie->titre; ?>
                    </a>
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
    
</div>
<h1 class="title">Administrer les articles </h1>

<p>
    <a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->titre ?></td>
                <td>
                    <a href="?p=admin.posts.edit&id=<?= $post->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<h1 class="title">Administrer les categories </h1>

<p>
    <a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a>
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
        <?php foreach ($items as $category) : ?>
            <tr>
                <td><?= $category->id ?></td>
                <td><?= $category->titre ?></td>
                <td>
                    <a href="?p=admin.categories.edit&id=<?= $category->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.categories.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


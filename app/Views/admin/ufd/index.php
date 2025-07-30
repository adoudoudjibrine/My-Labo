
<h1 class="title">Administrer les ufds </h1>

<p>
    <a href="?p=admin.ufd.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Intitule</th>
            <th>code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $ufd) : ?>
            <tr>
                <td><?= $ufd->id ?></td>
                <td><?= $ufd->intitule ?></td>
                <td><?= $ufd->code ?></td>
                <td>
                    <a href="?p=admin.ufd.edit&id=<?= $ufd->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.ufd.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $ufd->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


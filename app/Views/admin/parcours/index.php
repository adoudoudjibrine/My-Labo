
<h1 class="title">Administrer les Parcours </h1>

<p>
    <a href="?p=admin.parcours.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Intitule</th>
            <th>Departement</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $parcours) : ?>
            <tr>
                <td><?= $parcours->id ?></td>
                <td><?= $parcours->intitule ?></td>
                <td><?= $parcours->extrait ?></td>
                <td><?= $parcours->code ?></td>
                <td>
                    <a href="?p=admin.parcours.edit&id=<?= $parcours->id ?>" class="btn btn-primary">Modifier</a>
                    <form action="?p=admin.parcours.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $parcours->id ?>" />
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

